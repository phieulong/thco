import './bootstrap';
import {Collapse} from 'flowbite';

// set the target element that will be collapsed or expanded (eg. navbar menu)
const $targetEl = document.getElementById('navbar-default');

// optionally set a trigger element (eg. a button, hamburger icon)
const $triggerEl = document.getElementById('triggerEl');

// optional options with default values and callback functions
const options = {
    onCollapse: () => {
        console.log('element has been collapsed');
    },
    onExpand: () => {
        console.log('element has been expanded');
    },
    onToggle: () => {
        console.log('element has been toggled');
    },
};

const instanceOptions = {
    id: 'navbar-default',
    override: true
};

/*
 * $targetEl: required
 * $triggerEl: optional
 * options: optional
 */
const collapse = new Collapse($targetEl, $triggerEl, options, instanceOptions);

export function myFunction() {
    alert("Button clicked!");
}


// show the target element
// collapse.expand();

// hide the target element
// collapse.collapse();

// toggle the visibility of the target element
// collapse.toggle();

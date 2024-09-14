defmodule ThcoTest do
  use ExUnit.Case
  doctest Thco

  test "greets the world" do
    assert Thco.hello() == :world
  end
end

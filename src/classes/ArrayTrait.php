<?php

namespace Sunaoka\Aws\Structures;

trait ArrayTrait
{
    /**
     * @var array<string, mixed>
     */
    protected array $__data = [];

    public function toArray(): array
    {
        $result = $this->__data;

        array_walk_recursive($result, function (&$value) {
            if ($value instanceof Arrayable) {
                $value = $value->toArray();
            }
        });

        return $result;
    }
}

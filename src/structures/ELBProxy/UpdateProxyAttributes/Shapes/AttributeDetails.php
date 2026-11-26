<?php

namespace Sunaoka\Aws\Structures\ELBProxy\UpdateProxyAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $value
 * @property string|null $defaultValue
 */
class AttributeDetails extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: string,
     *     defaultValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $DefaultValue
 * @property int $Min
 * @property int $Max
 * @property int $MaxItems
 */
class IntegerListConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: list<int>,
     *     Min?: int,
     *     Max?: int,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

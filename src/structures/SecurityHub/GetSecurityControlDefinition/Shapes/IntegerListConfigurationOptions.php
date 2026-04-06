<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int>|null $DefaultValue
 * @property int|null $Min
 * @property int|null $Max
 * @property int|null $MaxItems
 */
class IntegerListConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: list<int>|null,
     *     Min?: int|null,
     *     Max?: int|null,
     *     MaxItems?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

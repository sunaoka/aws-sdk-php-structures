<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DefaultValue
 * @property int $Min
 * @property int $Max
 */
class IntegerConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: int,
     *     Min?: int,
     *     Max?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DefaultValue
 * @property int|null $Min
 * @property int|null $Max
 */
class IntegerConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: int|null,
     *     Min?: int|null,
     *     Max?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $DefaultValue
 * @property double $Min
 * @property double $Max
 */
class DoubleConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: double,
     *     Min?: double,
     *     Max?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

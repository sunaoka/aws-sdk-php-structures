<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $DefaultValue
 * @property double|null $Min
 * @property double|null $Max
 */
class DoubleConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: double|null,
     *     Min?: double|null,
     *     Max?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProductPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property bool $UsePreviousValue
 */
class UpdateProvisioningParameter extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Value?: string,
     *     UsePreviousValue?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

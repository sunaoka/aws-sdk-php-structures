<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProductPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $Value
 * @property bool|null $UsePreviousValue
 */
class UpdateProvisioningParameter extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Value?: string|null,
     *     UsePreviousValue?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

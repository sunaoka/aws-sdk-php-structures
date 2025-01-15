<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProductPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceTargetDefinition|null $Target
 * @property 'STATIC'|'DYNAMIC'|null $Evaluation
 * @property string|null $CausingEntity
 */
class ResourceChangeDetail extends Shape
{
    /**
     * @param array{
     *     Target?: ResourceTargetDefinition|null,
     *     Evaluation?: 'STATIC'|'DYNAMIC'|null,
     *     CausingEntity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

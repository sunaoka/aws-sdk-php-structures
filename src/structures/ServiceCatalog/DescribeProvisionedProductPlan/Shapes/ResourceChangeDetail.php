<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProductPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceTargetDefinition $Target
 * @property 'STATIC'|'DYNAMIC' $Evaluation
 * @property string $CausingEntity
 */
class ResourceChangeDetail extends Shape
{
    /**
     * @param array{
     *     Target?: ResourceTargetDefinition,
     *     Evaluation?: 'STATIC'|'DYNAMIC',
     *     CausingEntity?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

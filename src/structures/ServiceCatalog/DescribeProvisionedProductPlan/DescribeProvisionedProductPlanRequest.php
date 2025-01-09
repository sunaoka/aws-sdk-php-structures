<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProductPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PlanId
 * @property int $PageSize
 * @property string $PageToken
 */
class DescribeProvisionedProductPlanRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PlanId: string,
     *     PageSize?: int,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

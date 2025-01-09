<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ExecuteProvisionedProductPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PlanId
 * @property string $IdempotencyToken
 */
class ExecuteProvisionedProductPlanRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PlanId: string,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

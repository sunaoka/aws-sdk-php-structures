<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ExecuteProvisionedProductPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PlanId
 * @property string $IdempotencyToken
 */
class ExecuteProvisionedProductPlanRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PlanId: string,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

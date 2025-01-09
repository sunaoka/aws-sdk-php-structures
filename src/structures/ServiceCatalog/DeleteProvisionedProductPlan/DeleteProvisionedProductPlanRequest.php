<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteProvisionedProductPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PlanId
 * @property bool $IgnoreErrors
 */
class DeleteProvisionedProductPlanRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PlanId: string,
     *     IgnoreErrors?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

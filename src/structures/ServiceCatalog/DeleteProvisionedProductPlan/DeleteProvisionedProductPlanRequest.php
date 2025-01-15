<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteProvisionedProductPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PlanId
 * @property bool|null $IgnoreErrors
 */
class DeleteProvisionedProductPlanRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PlanId: string,
     *     IgnoreErrors?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

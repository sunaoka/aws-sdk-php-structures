<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateComputeQuota;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ComputeQuotaId
 * @property int $TargetVersion
 * @property Shapes\ComputeQuotaConfig|null $ComputeQuotaConfig
 * @property Shapes\ComputeQuotaTarget|null $ComputeQuotaTarget
 * @property 'Enabled'|'Disabled'|null $ActivationState
 * @property string|null $Description
 */
class UpdateComputeQuotaRequest extends Request
{
    /**
     * @param array{
     *     ComputeQuotaId: string,
     *     TargetVersion: int,
     *     ComputeQuotaConfig?: Shapes\ComputeQuotaConfig|null,
     *     ComputeQuotaTarget?: Shapes\ComputeQuotaTarget|null,
     *     ActivationState?: 'Enabled'|'Disabled'|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

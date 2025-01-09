<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateComputeQuota;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ComputeQuotaId
 * @property int $TargetVersion
 * @property Shapes\ComputeQuotaConfig $ComputeQuotaConfig
 * @property Shapes\ComputeQuotaTarget $ComputeQuotaTarget
 * @property 'Enabled'|'Disabled' $ActivationState
 * @property string $Description
 */
class UpdateComputeQuotaRequest extends Request
{
    /**
     * @param array{
     *     ComputeQuotaId: string,
     *     TargetVersion: int,
     *     ComputeQuotaConfig?: Shapes\ComputeQuotaConfig,
     *     ComputeQuotaTarget?: Shapes\ComputeQuotaTarget,
     *     ActivationState?: 'Enabled'|'Disabled',
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

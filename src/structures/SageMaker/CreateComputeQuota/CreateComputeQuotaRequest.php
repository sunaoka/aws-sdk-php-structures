<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateComputeQuota;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $ClusterArn
 * @property Shapes\ComputeQuotaConfig $ComputeQuotaConfig
 * @property Shapes\ComputeQuotaTarget $ComputeQuotaTarget
 * @property 'Enabled'|'Disabled' $ActivationState
 * @property list<Shapes\Tag> $Tags
 */
class CreateComputeQuotaRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     ClusterArn: string,
     *     ComputeQuotaConfig: Shapes\ComputeQuotaConfig,
     *     ComputeQuotaTarget: Shapes\ComputeQuotaTarget,
     *     ActivationState?: 'Enabled'|'Disabled',
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

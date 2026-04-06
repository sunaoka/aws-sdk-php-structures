<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateComputeQuota;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $ClusterArn
 * @property Shapes\ComputeQuotaConfig $ComputeQuotaConfig
 * @property Shapes\ComputeQuotaTarget $ComputeQuotaTarget
 * @property 'Enabled'|'Disabled'|null $ActivationState
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateComputeQuotaRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     ClusterArn: string,
     *     ComputeQuotaConfig: Shapes\ComputeQuotaConfig,
     *     ComputeQuotaTarget: Shapes\ComputeQuotaTarget,
     *     ActivationState?: 'Enabled'|'Disabled'|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

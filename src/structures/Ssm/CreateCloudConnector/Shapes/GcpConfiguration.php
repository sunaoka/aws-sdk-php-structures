<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateCloudConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OrganizationId
 * @property string $WorkloadIdentityPoolProvider
 * @property string $ServiceAccountEmail
 * @property GcpConfigurationTargets|null $Targets
 */
class GcpConfiguration extends Shape
{
    /**
     * @param array{
     *     OrganizationId?: string|null,
     *     WorkloadIdentityPoolProvider: string,
     *     ServiceAccountEmail: string,
     *     Targets?: GcpConfigurationTargets|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

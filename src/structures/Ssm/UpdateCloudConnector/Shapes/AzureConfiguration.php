<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateCloudConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TenantId
 * @property string|null $TenantDisplayName
 * @property string $ApplicationId
 * @property string|null $ApplicationDisplayName
 * @property ConfigurationTargets|null $Targets
 */
class AzureConfiguration extends Shape
{
    /**
     * @param array{
     *     TenantId: string,
     *     TenantDisplayName?: string|null,
     *     ApplicationId: string,
     *     ApplicationDisplayName?: string|null,
     *     Targets?: ConfigurationTargets|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

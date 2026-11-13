<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string $InstanceArn
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property bool|null $PermissionSetsEnabled
 * @property Shapes\NetworkConfigurationInfo|null $NetworkConfiguration
 */
class UpdateInstanceRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     InstanceArn: string,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     PermissionSetsEnabled?: bool|null,
     *     NetworkConfiguration?: Shapes\NetworkConfigurationInfo|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

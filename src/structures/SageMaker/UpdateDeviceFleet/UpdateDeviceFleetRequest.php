<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDeviceFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceFleetName
 * @property string $RoleArn
 * @property string $Description
 * @property Shapes\EdgeOutputConfig $OutputConfig
 * @property bool $EnableIotRoleAlias
 */
class UpdateDeviceFleetRequest extends Request
{
    /**
     * @param array{
     *     DeviceFleetName: string,
     *     RoleArn?: string,
     *     Description?: string,
     *     OutputConfig: Shapes\EdgeOutputConfig,
     *     EnableIotRoleAlias?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDeviceFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceFleetName
 * @property string|null $RoleArn
 * @property string|null $Description
 * @property Shapes\EdgeOutputConfig $OutputConfig
 * @property bool|null $EnableIotRoleAlias
 */
class UpdateDeviceFleetRequest extends Request
{
    /**
     * @param array{
     *     DeviceFleetName: string,
     *     RoleArn?: string|null,
     *     Description?: string|null,
     *     OutputConfig: Shapes\EdgeOutputConfig,
     *     EnableIotRoleAlias?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

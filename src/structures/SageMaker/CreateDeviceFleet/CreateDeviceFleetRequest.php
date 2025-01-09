<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDeviceFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceFleetName
 * @property string $RoleArn
 * @property string $Description
 * @property Shapes\EdgeOutputConfig $OutputConfig
 * @property list<Shapes\Tag> $Tags
 * @property bool $EnableIotRoleAlias
 */
class CreateDeviceFleetRequest extends Request
{
    /**
     * @param array{
     *     DeviceFleetName: string,
     *     RoleArn?: string,
     *     Description?: string,
     *     OutputConfig: Shapes\EdgeOutputConfig,
     *     Tags?: list<Shapes\Tag>,
     *     EnableIotRoleAlias?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

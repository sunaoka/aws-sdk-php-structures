<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDeviceFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceFleetName
 * @property string|null $RoleArn
 * @property string|null $Description
 * @property Shapes\EdgeOutputConfig $OutputConfig
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $EnableIotRoleAlias
 */
class CreateDeviceFleetRequest extends Request
{
    /**
     * @param array{
     *     DeviceFleetName: string,
     *     RoleArn?: string|null,
     *     Description?: string|null,
     *     OutputConfig: Shapes\EdgeOutputConfig,
     *     Tags?: list<Shapes\Tag>|null,
     *     EnableIotRoleAlias?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

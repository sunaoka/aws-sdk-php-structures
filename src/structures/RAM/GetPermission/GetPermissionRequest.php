<?php

namespace Sunaoka\Aws\Structures\RAM\GetPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionArn
 * @property int|null $permissionVersion
 * @property list<Shapes\PermissionTemplateParameterInput>|null $permissionTemplateParameters
 */
class GetPermissionRequest extends Request
{
    /**
     * @param array{
     *     permissionArn: string,
     *     permissionVersion?: int|null,
     *     permissionTemplateParameters?: list<Shapes\PermissionTemplateParameterInput>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

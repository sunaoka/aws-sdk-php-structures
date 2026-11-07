<?php

namespace Sunaoka\Aws\Structures\RAM\AssociateResourceSharePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property string $permissionArn
 * @property list<Shapes\PermissionTemplateParameterInput>|null $permissionTemplateParameters
 * @property bool|null $replace
 * @property string|null $clientToken
 * @property int|null $permissionVersion
 */
class AssociateResourceSharePermissionRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn: string,
     *     permissionArn: string,
     *     permissionTemplateParameters?: list<Shapes\PermissionTemplateParameterInput>|null,
     *     replace?: bool|null,
     *     clientToken?: string|null,
     *     permissionVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

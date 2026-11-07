<?php

namespace Sunaoka\Aws\Structures\RAM\CreatePermissionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionArn
 * @property string $policyTemplate
 * @property list<Shapes\PermissionTemplateParameterDeclaration>|null $permissionTemplateParameters
 * @property string|null $clientToken
 */
class CreatePermissionVersionRequest extends Request
{
    /**
     * @param array{
     *     permissionArn: string,
     *     policyTemplate: string,
     *     permissionTemplateParameters?: list<Shapes\PermissionTemplateParameterDeclaration>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\RAM\ReplacePermissionAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fromPermissionArn
 * @property int|null $fromPermissionVersion
 * @property string $toPermissionArn
 * @property list<Shapes\PermissionTemplateParameterInput>|null $permissionTemplateParameters
 * @property string|null $clientToken
 */
class ReplacePermissionAssociationsRequest extends Request
{
    /**
     * @param array{
     *     fromPermissionArn: string,
     *     fromPermissionVersion?: int|null,
     *     toPermissionArn: string,
     *     permissionTemplateParameters?: list<Shapes\PermissionTemplateParameterInput>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

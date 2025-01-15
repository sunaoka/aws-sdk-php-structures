<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFpgaImageAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $FpgaImageId
 * @property 'description'|'name'|'loadPermission'|'productCodes'|null $Attribute
 * @property 'add'|'remove'|null $OperationType
 * @property list<string>|null $UserIds
 * @property list<string>|null $UserGroups
 * @property list<string>|null $ProductCodes
 * @property Shapes\LoadPermissionModifications|null $LoadPermission
 * @property string|null $Description
 * @property string|null $Name
 */
class ModifyFpgaImageAttributeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     FpgaImageId: string,
     *     Attribute?: 'description'|'name'|'loadPermission'|'productCodes'|null,
     *     OperationType?: 'add'|'remove'|null,
     *     UserIds?: list<string>|null,
     *     UserGroups?: list<string>|null,
     *     ProductCodes?: list<string>|null,
     *     LoadPermission?: Shapes\LoadPermissionModifications|null,
     *     Description?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

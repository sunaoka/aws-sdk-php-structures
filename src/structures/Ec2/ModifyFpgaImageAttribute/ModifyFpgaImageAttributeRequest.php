<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFpgaImageAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $FpgaImageId
 * @property 'description'|'name'|'loadPermission'|'productCodes' $Attribute
 * @property 'add'|'remove' $OperationType
 * @property list<string> $UserIds
 * @property list<string> $UserGroups
 * @property list<string> $ProductCodes
 * @property Shapes\LoadPermissionModifications $LoadPermission
 * @property string $Description
 * @property string $Name
 */
class ModifyFpgaImageAttributeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     FpgaImageId: string,
     *     Attribute?: 'description'|'name'|'loadPermission'|'productCodes',
     *     OperationType?: 'add'|'remove',
     *     UserIds?: list<string>,
     *     UserGroups?: list<string>,
     *     ProductCodes?: list<string>,
     *     LoadPermission?: Shapes\LoadPermissionModifications,
     *     Description?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

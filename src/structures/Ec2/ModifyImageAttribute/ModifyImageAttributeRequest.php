<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyImageAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Attribute
 * @property Shapes\AttributeValue $Description
 * @property string $ImageId
 * @property Shapes\LaunchPermissionModifications $LaunchPermission
 * @property 'add'|'remove' $OperationType
 * @property list<string> $ProductCodes
 * @property list<string> $UserGroups
 * @property list<string> $UserIds
 * @property string $Value
 * @property list<string> $OrganizationArns
 * @property list<string> $OrganizationalUnitArns
 * @property Shapes\AttributeValue $ImdsSupport
 * @property bool $DryRun
 */
class ModifyImageAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attribute?: string,
     *     Description?: Shapes\AttributeValue,
     *     ImageId: string,
     *     LaunchPermission?: Shapes\LaunchPermissionModifications,
     *     OperationType?: 'add'|'remove',
     *     ProductCodes?: list<string>,
     *     UserGroups?: list<string>,
     *     UserIds?: list<string>,
     *     Value?: string,
     *     OrganizationArns?: list<string>,
     *     OrganizationalUnitArns?: list<string>,
     *     ImdsSupport?: Shapes\AttributeValue,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

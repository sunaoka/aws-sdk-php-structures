<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyImageAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Attribute
 * @property Shapes\AttributeValue|null $Description
 * @property string $ImageId
 * @property Shapes\LaunchPermissionModifications|null $LaunchPermission
 * @property 'add'|'remove'|null $OperationType
 * @property list<string>|null $ProductCodes
 * @property list<string>|null $UserGroups
 * @property list<string>|null $UserIds
 * @property string|null $Value
 * @property bool|null $DryRun
 * @property list<string>|null $OrganizationArns
 * @property list<string>|null $OrganizationalUnitArns
 * @property Shapes\AttributeValue|null $ImdsSupport
 */
class ModifyImageAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attribute?: string|null,
     *     Description?: Shapes\AttributeValue|null,
     *     ImageId: string,
     *     LaunchPermission?: Shapes\LaunchPermissionModifications|null,
     *     OperationType?: 'add'|'remove'|null,
     *     ProductCodes?: list<string>|null,
     *     UserGroups?: list<string>|null,
     *     UserIds?: list<string>|null,
     *     Value?: string|null,
     *     DryRun?: bool|null,
     *     OrganizationArns?: list<string>|null,
     *     OrganizationalUnitArns?: list<string>|null,
     *     ImdsSupport?: Shapes\AttributeValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

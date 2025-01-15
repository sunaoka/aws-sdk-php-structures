<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPoolId
 * @property string|null $Description
 * @property bool|null $AutoImport
 * @property int<0, 128>|null $AllocationMinNetmaskLength
 * @property int<0, 128>|null $AllocationMaxNetmaskLength
 * @property int<0, 128>|null $AllocationDefaultNetmaskLength
 * @property bool|null $ClearAllocationDefaultNetmaskLength
 * @property list<Shapes\RequestIpamResourceTag>|null $AddAllocationResourceTags
 * @property list<Shapes\RequestIpamResourceTag>|null $RemoveAllocationResourceTags
 */
class ModifyIpamPoolRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPoolId: string,
     *     Description?: string|null,
     *     AutoImport?: bool|null,
     *     AllocationMinNetmaskLength?: int<0, 128>|null,
     *     AllocationMaxNetmaskLength?: int<0, 128>|null,
     *     AllocationDefaultNetmaskLength?: int<0, 128>|null,
     *     ClearAllocationDefaultNetmaskLength?: bool|null,
     *     AddAllocationResourceTags?: list<Shapes\RequestIpamResourceTag>|null,
     *     RemoveAllocationResourceTags?: list<Shapes\RequestIpamResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

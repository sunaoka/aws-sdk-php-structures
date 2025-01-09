<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamPoolId
 * @property string $Description
 * @property bool $AutoImport
 * @property int<0, 128> $AllocationMinNetmaskLength
 * @property int<0, 128> $AllocationMaxNetmaskLength
 * @property int<0, 128> $AllocationDefaultNetmaskLength
 * @property bool $ClearAllocationDefaultNetmaskLength
 * @property list<Shapes\RequestIpamResourceTag> $AddAllocationResourceTags
 * @property list<Shapes\RequestIpamResourceTag> $RemoveAllocationResourceTags
 */
class ModifyIpamPoolRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamPoolId: string,
     *     Description?: string,
     *     AutoImport?: bool,
     *     AllocationMinNetmaskLength?: int<0, 128>,
     *     AllocationMaxNetmaskLength?: int<0, 128>,
     *     AllocationDefaultNetmaskLength?: int<0, 128>,
     *     ClearAllocationDefaultNetmaskLength?: bool,
     *     AddAllocationResourceTags?: list<Shapes\RequestIpamResourceTag>,
     *     RemoveAllocationResourceTags?: list<Shapes\RequestIpamResourceTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

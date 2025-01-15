<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyAvailabilityZoneGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property 'opted-in'|'not-opted-in' $OptInStatus
 * @property bool|null $DryRun
 */
class ModifyAvailabilityZoneGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     OptInStatus: 'opted-in'|'not-opted-in',
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

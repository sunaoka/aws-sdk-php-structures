<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceNetworkPerformanceOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'default'|'vpc-1'|'ebs-1' $BandwidthWeighting
 * @property bool|null $DryRun
 */
class ModifyInstanceNetworkPerformanceOptionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     BandwidthWeighting: 'default'|'vpc-1'|'ebs-1',
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

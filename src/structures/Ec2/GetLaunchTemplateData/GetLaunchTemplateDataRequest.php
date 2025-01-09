<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $InstanceId
 */
class GetLaunchTemplateDataRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

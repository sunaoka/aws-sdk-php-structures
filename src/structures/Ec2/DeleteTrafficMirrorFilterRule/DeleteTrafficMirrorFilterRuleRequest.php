<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTrafficMirrorFilterRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorFilterRuleId
 * @property bool $DryRun
 */
class DeleteTrafficMirrorFilterRuleRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorFilterRuleId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

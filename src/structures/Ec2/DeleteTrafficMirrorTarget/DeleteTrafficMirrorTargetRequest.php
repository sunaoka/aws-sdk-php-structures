<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTrafficMirrorTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorTargetId
 * @property bool|null $DryRun
 */
class DeleteTrafficMirrorTargetRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorTargetId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

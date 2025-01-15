<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTrafficMirrorSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorSessionId
 * @property bool|null $DryRun
 */
class DeleteTrafficMirrorSessionRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorSessionId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

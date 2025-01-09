<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTrafficMirrorFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorFilterId
 * @property bool $DryRun
 */
class DeleteTrafficMirrorFilterRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorFilterId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

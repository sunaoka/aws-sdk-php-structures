<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTrafficMirrorFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorFilterId
 * @property bool|null $DryRun
 */
class DeleteTrafficMirrorFilterRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorFilterId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSnapshotBlockPublicAccessState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 */
class GetSnapshotBlockPublicAccessStateRequest extends Request
{
    /**
     * @param array{DryRun?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

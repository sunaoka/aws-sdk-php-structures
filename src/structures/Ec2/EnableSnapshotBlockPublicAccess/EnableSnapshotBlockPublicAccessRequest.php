<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableSnapshotBlockPublicAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'block-all-sharing'|'block-new-sharing'|'unblocked' $State
 * @property bool $DryRun
 */
class EnableSnapshotBlockPublicAccessRequest extends Request
{
    /**
     * @param array{
     *     State: 'block-all-sharing'|'block-new-sharing'|'unblocked',
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterDbRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $RevisionTarget
 */
class ModifyClusterDbRevisionRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     RevisionTarget: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

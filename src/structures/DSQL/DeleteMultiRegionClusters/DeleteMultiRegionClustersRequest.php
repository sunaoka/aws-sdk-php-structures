<?php

namespace Sunaoka\Aws\Structures\DSQL\DeleteMultiRegionClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $linkedClusterArns
 * @property string|null $clientToken
 */
class DeleteMultiRegionClustersRequest extends Request
{
    /**
     * @param array{
     *     linkedClusterArns: list<string>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

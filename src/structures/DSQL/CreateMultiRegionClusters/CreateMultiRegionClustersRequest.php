<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateMultiRegionClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $linkedRegionList
 * @property array<string, Shapes\LinkedClusterProperties> $clusterProperties
 * @property string $witnessRegion
 * @property string $clientToken
 */
class CreateMultiRegionClustersRequest extends Request
{
    /**
     * @param array{
     *     linkedRegionList: list<string>,
     *     clusterProperties?: array<string, Shapes\LinkedClusterProperties>,
     *     witnessRegion: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

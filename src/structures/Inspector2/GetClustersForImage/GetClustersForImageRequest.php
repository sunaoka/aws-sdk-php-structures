<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetClustersForImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ClusterForImageFilterCriteria $filter
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class GetClustersForImageRequest extends Request
{
    /**
     * @param array{
     *     filter: Shapes\ClusterForImageFilterCriteria,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

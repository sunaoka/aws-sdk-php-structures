<?php

namespace Sunaoka\Aws\Structures\DataPipeline\QueryObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property Shapes\Query $query
 * @property string $sphere
 * @property string $marker
 * @property int $limit
 */
class QueryObjectsRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     query?: Shapes\Query,
     *     sphere: string,
     *     marker?: string,
     *     limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

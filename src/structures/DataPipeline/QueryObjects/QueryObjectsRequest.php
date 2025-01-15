<?php

namespace Sunaoka\Aws\Structures\DataPipeline\QueryObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property Shapes\Query|null $query
 * @property string $sphere
 * @property string|null $marker
 * @property int|null $limit
 */
class QueryObjectsRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     query?: Shapes\Query|null,
     *     sphere: string,
     *     marker?: string|null,
     *     limit?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

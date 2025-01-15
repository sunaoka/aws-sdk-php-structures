<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ListPipelines;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\PipelineIdName> $pipelineIdList
 * @property string|null $marker
 * @property bool|null $hasMoreResults
 */
class ListPipelinesResponse extends Response
{
}

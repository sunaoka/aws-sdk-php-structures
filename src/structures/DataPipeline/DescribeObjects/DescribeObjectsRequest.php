<?php

namespace Sunaoka\Aws\Structures\DataPipeline\DescribeObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property list<string> $objectIds
 * @property bool|null $evaluateExpressions
 * @property string|null $marker
 */
class DescribeObjectsRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     objectIds: list<string>,
     *     evaluateExpressions?: bool|null,
     *     marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

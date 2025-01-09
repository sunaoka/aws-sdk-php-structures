<?php

namespace Sunaoka\Aws\Structures\DataPipeline\DescribeObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property list<string> $objectIds
 * @property bool $evaluateExpressions
 * @property string $marker
 */
class DescribeObjectsRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     objectIds: list<string>,
     *     evaluateExpressions?: bool,
     *     marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

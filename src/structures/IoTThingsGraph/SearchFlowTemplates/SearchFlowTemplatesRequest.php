<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchFlowTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\FlowTemplateFilter> $filters
 * @property string $nextToken
 * @property int $maxResults
 */
class SearchFlowTemplatesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\FlowTemplateFilter>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

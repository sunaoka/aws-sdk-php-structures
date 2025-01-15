<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchFlowTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\FlowTemplateFilter>|null $filters
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class SearchFlowTemplatesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\FlowTemplateFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

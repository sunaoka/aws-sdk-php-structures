<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchSystemTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SystemTemplateFilter> $filters
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class SearchSystemTemplatesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\SystemTemplateFilter>,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

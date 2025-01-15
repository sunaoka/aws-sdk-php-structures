<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchSystemTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SystemTemplateFilter>|null $filters
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class SearchSystemTemplatesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\SystemTemplateFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

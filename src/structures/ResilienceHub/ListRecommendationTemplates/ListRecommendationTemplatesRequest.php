<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListRecommendationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $assessmentArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $name
 * @property string|null $nextToken
 * @property string|null $recommendationTemplateArn
 * @property bool|null $reverseOrder
 * @property list<'Pending'|'InProgress'|'Failed'|'Success'>|null $status
 */
class ListRecommendationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     assessmentArn?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     name?: string|null,
     *     nextToken?: string|null,
     *     recommendationTemplateArn?: string|null,
     *     reverseOrder?: bool|null,
     *     status?: list<'Pending'|'InProgress'|'Failed'|'Success'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

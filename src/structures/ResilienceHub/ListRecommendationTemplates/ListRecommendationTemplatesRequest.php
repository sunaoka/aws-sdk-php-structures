<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListRecommendationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentArn
 * @property int<1, 100> $maxResults
 * @property string $name
 * @property string $nextToken
 * @property string $recommendationTemplateArn
 * @property bool $reverseOrder
 * @property list<'Pending'|'InProgress'|'Failed'|'Success'> $status
 */
class ListRecommendationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     assessmentArn?: string,
     *     maxResults?: int<1, 100>,
     *     name?: string,
     *     nextToken?: string,
     *     recommendationTemplateArn?: string,
     *     reverseOrder?: bool,
     *     status?: list<'Pending'|'InProgress'|'Failed'|'Success'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

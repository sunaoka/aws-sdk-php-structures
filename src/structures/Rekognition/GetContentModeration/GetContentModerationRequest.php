<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetContentModeration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 * @property 'NAME'|'TIMESTAMP'|null $SortBy
 * @property 'TIMESTAMPS'|'SEGMENTS'|null $AggregateBy
 */
class GetContentModerationRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null,
     *     SortBy?: 'NAME'|'TIMESTAMP'|null,
     *     AggregateBy?: 'TIMESTAMPS'|'SEGMENTS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetContentModeration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int<1, max> $MaxResults
 * @property string $NextToken
 * @property 'NAME'|'TIMESTAMP' $SortBy
 * @property 'TIMESTAMPS'|'SEGMENTS' $AggregateBy
 */
class GetContentModerationRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxResults?: int<1, max>,
     *     NextToken?: string,
     *     SortBy?: 'NAME'|'TIMESTAMP',
     *     AggregateBy?: 'TIMESTAMPS'|'SEGMENTS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'NAME'|'TIMESTAMP' $SortBy
 * @property 'TIMESTAMPS'|'SEGMENTS' $AggregateBy
 */
class GetLabelDetectionRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxResults?: int,
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

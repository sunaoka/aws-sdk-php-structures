<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int<1, max> $MaxResults
 * @property string $NextToken
 * @property 'ID'|'TIMESTAMP' $SortBy
 */
class GetCelebrityRecognitionRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxResults?: int<1, max>,
     *     NextToken?: string,
     *     SortBy?: 'ID'|'TIMESTAMP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

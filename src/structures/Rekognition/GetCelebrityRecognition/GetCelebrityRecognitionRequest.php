<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 * @property 'ID'|'TIMESTAMP'|null $SortBy
 */
class GetCelebrityRecognitionRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null,
     *     SortBy?: 'ID'|'TIMESTAMP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceSearch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'INDEX'|'TIMESTAMP' $SortBy
 */
class GetFaceSearchRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     SortBy?: 'INDEX'|'TIMESTAMP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceSearch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 * @property 'INDEX'|'TIMESTAMP'|null $SortBy
 */
class GetFaceSearchRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null,
     *     SortBy?: 'INDEX'|'TIMESTAMP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

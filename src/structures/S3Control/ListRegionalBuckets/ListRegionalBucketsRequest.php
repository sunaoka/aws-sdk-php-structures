<?php

namespace Sunaoka\Aws\Structures\S3Control\ListRegionalBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $NextToken
 * @property int<0, 1000>|null $MaxResults
 * @property string|null $OutpostId
 */
class ListRegionalBucketsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1000>|null,
     *     OutpostId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

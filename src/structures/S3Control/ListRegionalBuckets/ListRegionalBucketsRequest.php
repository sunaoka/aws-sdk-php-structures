<?php

namespace Sunaoka\Aws\Structures\S3Control\ListRegionalBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $OutpostId
 */
class ListRegionalBucketsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     OutpostId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

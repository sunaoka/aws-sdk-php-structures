<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Bucket
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListAccessPointsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Bucket?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

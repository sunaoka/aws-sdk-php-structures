<?php

namespace Sunaoka\Aws\Structures\S3Control\ListMultiRegionAccessPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListMultiRegionAccessPointsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

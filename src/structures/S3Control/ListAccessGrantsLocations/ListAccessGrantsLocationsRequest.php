<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrantsLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $LocationScope
 */
class ListAccessGrantsLocationsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     LocationScope?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

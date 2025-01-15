<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrantsLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $NextToken
 * @property int<0, 1000>|null $MaxResults
 * @property string|null $LocationScope
 */
class ListAccessGrantsLocationsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1000>|null,
     *     LocationScope?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListPublishingDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPublishingDestinationsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

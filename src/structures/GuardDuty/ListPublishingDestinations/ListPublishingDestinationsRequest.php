<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListPublishingDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListPublishingDestinationsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

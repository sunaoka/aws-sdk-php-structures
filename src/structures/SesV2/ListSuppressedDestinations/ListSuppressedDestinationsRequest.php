<?php

namespace Sunaoka\Aws\Structures\SesV2\ListSuppressedDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'BOUNCE'|'COMPLAINT'> $Reasons
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property string $NextToken
 * @property int $PageSize
 */
class ListSuppressedDestinationsRequest extends Request
{
    /**
     * @param array{
     *     Reasons?: list<'BOUNCE'|'COMPLAINT'>,
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     NextToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

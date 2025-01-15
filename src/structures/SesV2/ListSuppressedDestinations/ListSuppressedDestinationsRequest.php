<?php

namespace Sunaoka\Aws\Structures\SesV2\ListSuppressedDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'BOUNCE'|'COMPLAINT'>|null $Reasons
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property string|null $NextToken
 * @property int|null $PageSize
 */
class ListSuppressedDestinationsRequest extends Request
{
    /**
     * @param array{
     *     Reasons?: list<'BOUNCE'|'COMPLAINT'>|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     NextToken?: string|null,
     *     PageSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

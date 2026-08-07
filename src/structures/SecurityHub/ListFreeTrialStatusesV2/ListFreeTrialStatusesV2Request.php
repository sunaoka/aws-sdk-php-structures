<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListFreeTrialStatusesV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AccountIds
 * @property list<'ACTIVE'|'INACTIVE'>|null $Statuses
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListFreeTrialStatusesV2Request extends Request
{
    /**
     * @param array{
     *     AccountIds?: list<string>|null,
     *     Statuses?: list<'ACTIVE'|'INACTIVE'>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

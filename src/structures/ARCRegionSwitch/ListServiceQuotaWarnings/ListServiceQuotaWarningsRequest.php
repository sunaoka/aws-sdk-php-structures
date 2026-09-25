<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListServiceQuotaWarnings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $planArns
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListServiceQuotaWarningsRequest extends Request
{
    /**
     * @param array{
     *     planArns?: list<string>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

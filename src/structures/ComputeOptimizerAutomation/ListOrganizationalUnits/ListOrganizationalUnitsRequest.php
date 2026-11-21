<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListOrganizationalUnits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $organizationalUnitIds
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListOrganizationalUnitsRequest extends Request
{
    /**
     * @param array{
     *     organizationalUnitIds?: list<string>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

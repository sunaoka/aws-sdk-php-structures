<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $GrantArns
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListReceivedGrantsRequest extends Request
{
    /**
     * @param array{
     *     GrantArns?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

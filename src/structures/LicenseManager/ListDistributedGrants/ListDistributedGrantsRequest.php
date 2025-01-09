<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListDistributedGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $GrantArns
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListDistributedGrantsRequest extends Request
{
    /**
     * @param array{
     *     GrantArns?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $GrantArns
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListReceivedGrantsRequest extends Request
{
    /**
     * @param array{
     *     GrantArns?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

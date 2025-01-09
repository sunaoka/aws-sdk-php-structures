<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedLicensesForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListReceivedLicensesForOrganizationRequest extends Request
{
    /**
     * @param array{
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

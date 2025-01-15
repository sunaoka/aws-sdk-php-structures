<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedLicenses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $LicenseArns
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListReceivedLicensesRequest extends Request
{
    /**
     * @param array{
     *     LicenseArns?: list<string>|null,
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

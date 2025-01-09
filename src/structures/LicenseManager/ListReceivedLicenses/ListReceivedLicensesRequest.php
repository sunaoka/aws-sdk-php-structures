<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedLicenses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LicenseArns
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListReceivedLicensesRequest extends Request
{
    /**
     * @param array{
     *     LicenseArns?: list<string>,
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

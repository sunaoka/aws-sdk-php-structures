<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseManagerReportGenerators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListLicenseManagerReportGeneratorsRequest extends Request
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

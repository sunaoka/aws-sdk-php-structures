<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConversionTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 */
class ListLicenseConversionTasksRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

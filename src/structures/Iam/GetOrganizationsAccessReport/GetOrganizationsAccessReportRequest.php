<?php

namespace Sunaoka\Aws\Structures\Iam\GetOrganizationsAccessReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int<1, 1000> $MaxItems
 * @property string $Marker
 * @property 'SERVICE_NAMESPACE_ASCENDING'|'SERVICE_NAMESPACE_DESCENDING'|'LAST_AUTHENTICATED_TIME_ASCENDING'|'LAST_AUTHENTICATED_TIME_DESCENDING' $SortKey
 */
class GetOrganizationsAccessReportRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxItems?: int<1, 1000>,
     *     Marker?: string,
     *     SortKey?: 'SERVICE_NAMESPACE_ASCENDING'|'SERVICE_NAMESPACE_DESCENDING'|'LAST_AUTHENTICATED_TIME_ASCENDING'|'LAST_AUTHENTICATED_TIME_DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

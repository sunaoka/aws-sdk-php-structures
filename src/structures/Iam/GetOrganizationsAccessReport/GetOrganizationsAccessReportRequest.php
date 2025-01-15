<?php

namespace Sunaoka\Aws\Structures\Iam\GetOrganizationsAccessReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int<1, 1000>|null $MaxItems
 * @property string|null $Marker
 * @property 'SERVICE_NAMESPACE_ASCENDING'|'SERVICE_NAMESPACE_DESCENDING'|'LAST_AUTHENTICATED_TIME_ASCENDING'|'LAST_AUTHENTICATED_TIME_DESCENDING'|null $SortKey
 */
class GetOrganizationsAccessReportRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxItems?: int<1, 1000>|null,
     *     Marker?: string|null,
     *     SortKey?: 'SERVICE_NAMESPACE_ASCENDING'|'SERVICE_NAMESPACE_DESCENDING'|'LAST_AUTHENTICATED_TIME_ASCENDING'|'LAST_AUTHENTICATED_TIME_DESCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

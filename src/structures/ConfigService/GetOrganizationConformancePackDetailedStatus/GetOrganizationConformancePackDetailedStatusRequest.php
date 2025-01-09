<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetOrganizationConformancePackDetailedStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationConformancePackName
 * @property Shapes\OrganizationResourceDetailedStatusFilters $Filters
 * @property int $Limit
 * @property string $NextToken
 */
class GetOrganizationConformancePackDetailedStatusRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConformancePackName: string,
     *     Filters?: Shapes\OrganizationResourceDetailedStatusFilters,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

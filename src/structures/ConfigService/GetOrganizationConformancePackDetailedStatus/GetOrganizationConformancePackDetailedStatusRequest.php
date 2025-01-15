<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetOrganizationConformancePackDetailedStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationConformancePackName
 * @property Shapes\OrganizationResourceDetailedStatusFilters|null $Filters
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class GetOrganizationConformancePackDetailedStatusRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConformancePackName: string,
     *     Filters?: Shapes\OrganizationResourceDetailedStatusFilters|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

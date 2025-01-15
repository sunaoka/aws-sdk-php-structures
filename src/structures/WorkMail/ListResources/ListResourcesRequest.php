<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\ListResourcesFilters|null $Filters
 */
class ListResourcesRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Filters?: Shapes\ListResourcesFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

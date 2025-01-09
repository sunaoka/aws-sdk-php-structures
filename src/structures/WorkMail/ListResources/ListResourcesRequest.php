<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property Shapes\ListResourcesFilters $Filters
 */
class ListResourcesRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     Filters?: Shapes\ListResourcesFilters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

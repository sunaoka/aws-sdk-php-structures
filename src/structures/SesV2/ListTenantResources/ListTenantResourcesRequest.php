<?php

namespace Sunaoka\Aws\Structures\SesV2\ListTenantResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TenantName
 * @property array<'RESOURCE_TYPE', string>|null $Filter
 * @property int|null $PageSize
 * @property string|null $NextToken
 */
class ListTenantResourcesRequest extends Request
{
    /**
     * @param array{
     *     TenantName: string,
     *     Filter?: array<'RESOURCE_TYPE', string>|null,
     *     PageSize?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

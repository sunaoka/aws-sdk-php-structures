<?php

namespace Sunaoka\Aws\Structures\SesV2\ListTenants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'TENANT_NAME_CONTAINS'|'SENDING_STATUS', string>|null $Filter
 * @property string|null $NextToken
 * @property int|null $PageSize
 */
class ListTenantsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: array<'TENANT_NAME_CONTAINS'|'SENDING_STATUS', string>|null,
     *     NextToken?: string|null,
     *     PageSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

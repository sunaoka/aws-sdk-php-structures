<?php

namespace Sunaoka\Aws\Structures\SesV2\GetTenant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TenantName
 */
class GetTenantRequest extends Request
{
    /**
     * @param array{TenantName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

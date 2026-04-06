<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteTenant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TenantName
 */
class DeleteTenantRequest extends Request
{
    /**
     * @param array{TenantName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

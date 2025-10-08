<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateTenant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TenantName
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateTenantRequest extends Request
{
    /**
     * @param array{
     *     TenantName: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

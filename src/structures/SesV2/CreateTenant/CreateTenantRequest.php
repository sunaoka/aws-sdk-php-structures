<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateTenant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TenantName
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\TenantSuppressionAttributes|null $SuppressionAttributes
 */
class CreateTenantRequest extends Request
{
    /**
     * @param array{
     *     TenantName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     SuppressionAttributes?: Shapes\TenantSuppressionAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

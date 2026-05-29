<?php

namespace Sunaoka\Aws\Structures\SesV2\PutTenantSuppressionAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TenantName
 * @property list<'BOUNCE'|'COMPLAINT'>|null $SuppressedReasons
 * @property 'ACCOUNT'|'TENANT'|null $SuppressionScope
 */
class PutTenantSuppressionAttributesRequest extends Request
{
    /**
     * @param array{
     *     TenantName: string,
     *     SuppressedReasons?: list<'BOUNCE'|'COMPLAINT'>|null,
     *     SuppressionScope?: 'ACCOUNT'|'TENANT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SesV2\GetSuppressedDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailAddress
 * @property string|null $TenantName
 */
class GetSuppressedDestinationRequest extends Request
{
    /**
     * @param array{
     *     EmailAddress: string,
     *     TenantName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

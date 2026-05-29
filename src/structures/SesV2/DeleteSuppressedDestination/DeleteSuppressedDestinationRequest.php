<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteSuppressedDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailAddress
 * @property string|null $TenantName
 */
class DeleteSuppressedDestinationRequest extends Request
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

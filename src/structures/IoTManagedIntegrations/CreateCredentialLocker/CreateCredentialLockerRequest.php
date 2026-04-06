<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateCredentialLocker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateCredentialLockerRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

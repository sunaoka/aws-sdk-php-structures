<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetCredentialLocker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetCredentialLockerRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

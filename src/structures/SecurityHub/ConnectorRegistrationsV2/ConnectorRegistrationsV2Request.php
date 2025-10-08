<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ConnectorRegistrationsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthCode
 * @property string $AuthState
 */
class ConnectorRegistrationsV2Request extends Request
{
    /**
     * @param array{
     *     AuthCode: string,
     *     AuthState: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

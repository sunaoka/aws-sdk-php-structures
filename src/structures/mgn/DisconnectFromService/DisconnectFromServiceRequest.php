<?php

namespace Sunaoka\Aws\Structures\mgn\DisconnectFromService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 * @property string|null $accountID
 */
class DisconnectFromServiceRequest extends Request
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

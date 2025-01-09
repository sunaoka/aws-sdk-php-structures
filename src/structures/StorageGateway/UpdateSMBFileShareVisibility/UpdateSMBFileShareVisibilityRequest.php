<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateSMBFileShareVisibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property bool $FileSharesVisible
 */
class UpdateSMBFileShareVisibilityRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     FileSharesVisible: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

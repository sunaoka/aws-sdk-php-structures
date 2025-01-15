<?php

namespace Sunaoka\Aws\Structures\BackupGateway\UpdateGatewayInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 * @property string|null $GatewayDisplayName
 */
class UpdateGatewayInformationRequest extends Request
{
    /**
     * @param array{
     *     GatewayArn: string,
     *     GatewayDisplayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

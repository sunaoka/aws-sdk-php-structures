<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $SoftwareVersion
 */
class UpdateGatewayRequest extends Request
{
    /**
     * @param array{
     *     GatewayArn: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     SoftwareVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

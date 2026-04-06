<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateGatewayGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayGroupArn
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateGatewayGroupRequest extends Request
{
    /**
     * @param array{
     *     GatewayGroupArn: string,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

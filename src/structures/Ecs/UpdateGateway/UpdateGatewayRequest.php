<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gateway
 * @property string|null $infrastructureRoleArn
 * @property bool|null $deletionProtection
 * @property Shapes\UpdateGatewayConfiguration|null $configuration
 * @property 'NONE'|'GATEWAY'|null $propagateTags
 */
class UpdateGatewayRequest extends Request
{
    /**
     * @param array{
     *     gateway: string,
     *     infrastructureRoleArn?: string|null,
     *     deletionProtection?: bool|null,
     *     configuration?: Shapes\UpdateGatewayConfiguration|null,
     *     propagateTags?: 'NONE'|'GATEWAY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

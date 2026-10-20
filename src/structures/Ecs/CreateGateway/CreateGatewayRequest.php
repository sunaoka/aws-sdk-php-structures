<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $infrastructureRoleArn
 * @property string|null $clientToken
 * @property bool|null $deletionProtection
 * @property Shapes\GatewayConfiguration $configuration
 * @property list<Shapes\Tag>|null $tags
 * @property 'NONE'|'GATEWAY'|null $propagateTags
 */
class CreateGatewayRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     infrastructureRoleArn: string,
     *     clientToken?: string|null,
     *     deletionProtection?: bool|null,
     *     configuration: Shapes\GatewayConfiguration,
     *     tags?: list<Shapes\Tag>|null,
     *     propagateTags?: 'NONE'|'GATEWAY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizationUrl
 * @property string|null $userId
 * @property string|null $authorizationAttemptId
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 */
class OAuth2AuthorizationData extends Shape
{
    /**
     * @param array{
     *     authorizationUrl: string,
     *     userId?: string|null,
     *     authorizationAttemptId?: string|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

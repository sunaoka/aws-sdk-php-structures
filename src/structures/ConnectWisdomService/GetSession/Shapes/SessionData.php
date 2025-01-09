<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property SessionIntegrationConfiguration $integrationConfiguration
 * @property string $name
 * @property string $sessionArn
 * @property string $sessionId
 * @property array<string, string> $tags
 */
class SessionData extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     integrationConfiguration?: SessionIntegrationConfiguration,
     *     name: string,
     *     sessionArn: string,
     *     sessionId: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

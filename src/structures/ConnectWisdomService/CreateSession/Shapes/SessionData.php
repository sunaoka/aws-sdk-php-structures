<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property SessionIntegrationConfiguration|null $integrationConfiguration
 * @property string $name
 * @property string $sessionArn
 * @property string $sessionId
 * @property array<string, string>|null $tags
 */
class SessionData extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     integrationConfiguration?: SessionIntegrationConfiguration|null,
     *     name: string,
     *     sessionArn: string,
     *     sessionId: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

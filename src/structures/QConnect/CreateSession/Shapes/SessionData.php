<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', AIAgentConfigurationData>|null $aiAgentConfiguration
 * @property string|null $description
 * @property SessionIntegrationConfiguration|null $integrationConfiguration
 * @property string $name
 * @property string $sessionArn
 * @property string $sessionId
 * @property TagFilter|null $tagFilter
 * @property array<string, string>|null $tags
 */
class SessionData extends Shape
{
    /**
     * @param array{
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', AIAgentConfigurationData>|null,
     *     description?: string|null,
     *     integrationConfiguration?: SessionIntegrationConfiguration|null,
     *     name: string,
     *     sessionArn: string,
     *     sessionId: string,
     *     tagFilter?: TagFilter|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

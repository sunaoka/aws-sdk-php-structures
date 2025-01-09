<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', AIAgentConfigurationData> $aiAgentConfiguration
 * @property string $description
 * @property SessionIntegrationConfiguration $integrationConfiguration
 * @property string $name
 * @property string $sessionArn
 * @property string $sessionId
 * @property TagFilter $tagFilter
 * @property array<string, string> $tags
 */
class SessionData extends Shape
{
    /**
     * @param array{
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', AIAgentConfigurationData>,
     *     description?: string,
     *     integrationConfiguration?: SessionIntegrationConfiguration,
     *     name: string,
     *     sessionArn: string,
     *     sessionId: string,
     *     tagFilter?: TagFilter,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

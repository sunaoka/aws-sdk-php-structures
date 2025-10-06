<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionArn
 * @property string $sessionId
 * @property string $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property SessionIntegrationConfiguration|null $integrationConfiguration
 * @property TagFilter|null $tagFilter
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER', AIAgentConfigurationData>|null $aiAgentConfiguration
 * @property 'SYSTEM'|'CUSTOMER'|null $origin
 */
class SessionData extends Shape
{
    /**
     * @param array{
     *     sessionArn: string,
     *     sessionId: string,
     *     name: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     integrationConfiguration?: SessionIntegrationConfiguration|null,
     *     tagFilter?: TagFilter|null,
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER', AIAgentConfigurationData>|null,
     *     origin?: 'SYSTEM'|'CUSTOMER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

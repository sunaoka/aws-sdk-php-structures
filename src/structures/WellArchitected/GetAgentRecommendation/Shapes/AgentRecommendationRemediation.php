<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recommendationArn
 * @property 'AUTO_REMEDIATION'|'CONSOLE'|'CLI'|'SDK'|'IAC'|'MCP' $type
 * @property list<RemediationStep> $steps
 * @property list<ResourceLink>|null $resourceLinks
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $lastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 */
class AgentRecommendationRemediation extends Shape
{
    /**
     * @param array{
     *     recommendationArn: string,
     *     type: 'AUTO_REMEDIATION'|'CONSOLE'|'CLI'|'SDK'|'IAC'|'MCP',
     *     steps: list<RemediationStep>,
     *     resourceLinks?: list<ResourceLink>|null,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastModifiedBy?: string|null,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

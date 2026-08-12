<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommendationArn
 * @property 'AUTO_REMEDIATION'|'CONSOLE'|'CLI'|'SDK'|'IAC'|'MCP'|null $remediationType
 */
class GetAgentRecommendationRequest extends Request
{
    /**
     * @param array{
     *     recommendationArn: string,
     *     remediationType?: 'AUTO_REMEDIATION'|'CONSOLE'|'CLI'|'SDK'|'IAC'|'MCP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

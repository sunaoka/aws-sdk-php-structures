<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE'|'AZURE_DEVOPS'|'JIRA'|null $provider
 * @property 'SOURCE_CODE'|'DOCUMENTATION'|'ISSUE_TRACKING'|null $providerType
 */
class IntegrationFilter extends Shape
{
    /**
     * @param array{
     *     provider?: 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE'|'AZURE_DEVOPS'|'JIRA'|null,
     *     providerType?: 'SOURCE_CODE'|'DOCUMENTATION'|'ISSUE_TRACKING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

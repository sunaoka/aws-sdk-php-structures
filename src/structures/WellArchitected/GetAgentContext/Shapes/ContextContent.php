<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $accountIds
 * @property list<string>|null $regions
 * @property list<string>|null $awsServices
 * @property list<string>|null $resourceTypes
 * @property list<ContextResourceTag>|null $resourceTags
 * @property string|null $applicationOverview
 * @property string|null $industry
 * @property 'SAS'|'DESKTOP_APPLICATION'|'OTHER'|null $applicationType
 * @property 'MISSION_CRITICAL'|'BUSINESS_CRITICAL'|'NON_CRITICAL'|'TEST_DEVELOPMENT'|null $criticality
 * @property string|null $architectureOverview
 * @property string|null $additionalContext
 */
class ContextContent extends Shape
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     regions?: list<string>|null,
     *     awsServices?: list<string>|null,
     *     resourceTypes?: list<string>|null,
     *     resourceTags?: list<ContextResourceTag>|null,
     *     applicationOverview?: string|null,
     *     industry?: string|null,
     *     applicationType?: 'SAS'|'DESKTOP_APPLICATION'|'OTHER'|null,
     *     criticality?: 'MISSION_CRITICAL'|'BUSINESS_CRITICAL'|'NON_CRITICAL'|'TEST_DEVELOPMENT'|null,
     *     architectureOverview?: string|null,
     *     additionalContext?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

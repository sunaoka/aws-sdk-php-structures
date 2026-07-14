<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HostResourceGuid
 * @property string|null $HostResourceType
 * @property string|null $CanonicalId
 * @property int|null $SelfHostedAIModelResourceCount
 * @property int|null $SelfHostedAIAgentResourceCount
 * @property int|null $SelfHostedAIModelServingResourceCount
 * @property int|null $SelfHostedAIExternalEndpointResourceCount
 * @property int|null $SelfHostedAIDevelopmentResourceCount
 * @property int|null $SelfHostedAIAgentFrameworkResourceCount
 * @property int|null $SelfHostedAIAgentToolsAndIdentityResourceCount
 * @property int|null $SelfHostedTotalAIResourceCount
 */
class AIDetails extends Shape
{
    /**
     * @param array{
     *     HostResourceGuid?: string|null,
     *     HostResourceType?: string|null,
     *     CanonicalId?: string|null,
     *     SelfHostedAIModelResourceCount?: int|null,
     *     SelfHostedAIAgentResourceCount?: int|null,
     *     SelfHostedAIModelServingResourceCount?: int|null,
     *     SelfHostedAIExternalEndpointResourceCount?: int|null,
     *     SelfHostedAIDevelopmentResourceCount?: int|null,
     *     SelfHostedAIAgentFrameworkResourceCount?: int|null,
     *     SelfHostedAIAgentToolsAndIdentityResourceCount?: int|null,
     *     SelfHostedTotalAIResourceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

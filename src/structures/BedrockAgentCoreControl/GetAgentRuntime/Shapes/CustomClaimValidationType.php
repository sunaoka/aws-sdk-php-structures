<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inboundTokenClaimName
 * @property 'STRING'|'STRING_ARRAY' $inboundTokenClaimValueType
 * @property AuthorizingClaimMatchValueType $authorizingClaimMatchValue
 */
class CustomClaimValidationType extends Shape
{
    /**
     * @param array{
     *     inboundTokenClaimName: string,
     *     inboundTokenClaimValueType: 'STRING'|'STRING_ARRAY',
     *     authorizingClaimMatchValue: AuthorizingClaimMatchValueType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

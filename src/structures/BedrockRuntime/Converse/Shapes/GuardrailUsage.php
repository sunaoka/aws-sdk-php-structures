<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $topicPolicyUnits
 * @property int $contentPolicyUnits
 * @property int $wordPolicyUnits
 * @property int $sensitiveInformationPolicyUnits
 * @property int $sensitiveInformationPolicyFreeUnits
 * @property int $contextualGroundingPolicyUnits
 */
class GuardrailUsage extends Shape
{
    /**
     * @param array{
     *     topicPolicyUnits: int,
     *     contentPolicyUnits: int,
     *     wordPolicyUnits: int,
     *     sensitiveInformationPolicyUnits: int,
     *     sensitiveInformationPolicyFreeUnits: int,
     *     contextualGroundingPolicyUnits: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

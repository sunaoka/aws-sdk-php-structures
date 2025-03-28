<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $topicPolicyUnits
 * @property int $contentPolicyUnits
 * @property int $wordPolicyUnits
 * @property int $sensitiveInformationPolicyUnits
 * @property int $sensitiveInformationPolicyFreeUnits
 * @property int $contextualGroundingPolicyUnits
 * @property int|null $contentPolicyImageUnits
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
     *     contextualGroundingPolicyUnits: int,
     *     contentPolicyImageUnits?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

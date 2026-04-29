<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bundleArn
 * @property string $versionId
 */
class RecommendationResultConfigurationBundle extends Shape
{
    /**
     * @param array{
     *     bundleArn: string,
     *     versionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

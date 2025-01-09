<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSourceConfiguration $dataSourceConfiguration
 * @property BedrockModelSpecification $bedrockModelConfiguration
 */
class QnAIntentConfiguration extends Shape
{
    /**
     * @param array{
     *     dataSourceConfiguration?: DataSourceConfiguration,
     *     bedrockModelConfiguration?: BedrockModelSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

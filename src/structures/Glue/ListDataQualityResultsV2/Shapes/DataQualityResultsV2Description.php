<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityResultsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResultId
 * @property DataSource|null $DataSource
 * @property \Aws\Api\DateTimeResult|null $ResultPublishedOn
 * @property array<string, string>|null $Dimensions
 * @property string|null $EvaluationContext
 * @property array<string, string>|null $Descriptors
 */
class DataQualityResultsV2Description extends Shape
{
    /**
     * @param array{
     *     ResultId?: string|null,
     *     DataSource?: DataSource|null,
     *     ResultPublishedOn?: \Aws\Api\DateTimeResult|null,
     *     Dimensions?: array<string, string>|null,
     *     EvaluationContext?: string|null,
     *     Descriptors?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

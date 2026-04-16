<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenderSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetFieldName
 * @property 'STRING'|'NUMBER'|null $ContentType
 * @property 'TEXTUAL'|'CATEGORICAL'|null $FeatureType
 */
class RecommenderSchemaField extends Shape
{
    /**
     * @param array{
     *     TargetFieldName: string,
     *     ContentType?: 'STRING'|'NUMBER'|null,
     *     FeatureType?: 'TEXTUAL'|'CATEGORICAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

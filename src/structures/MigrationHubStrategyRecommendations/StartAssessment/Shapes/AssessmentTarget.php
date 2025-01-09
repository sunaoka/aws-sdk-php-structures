<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\StartAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'NOT_EQUALS'|'CONTAINS'|'NOT_CONTAINS' $condition
 * @property string $name
 * @property list<string> $values
 */
class AssessmentTarget extends Shape
{
    /**
     * @param array{
     *     condition: 'EQUALS'|'NOT_EQUALS'|'CONTAINS'|'NOT_CONTAINS',
     *     name: string,
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

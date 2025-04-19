<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'QUERY'|'GENERATIVE' $type
 * @property 'ISSUE_DETECTION'|'RULE_EVALUATION'|'OTHER' $source
 * @property RecommendationTriggerData $data
 * @property list<string> $recommendationIds
 */
class RecommendationTrigger extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'QUERY'|'GENERATIVE',
     *     source: 'ISSUE_DETECTION'|'RULE_EVALUATION'|'OTHER',
     *     data: RecommendationTriggerData,
     *     recommendationIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

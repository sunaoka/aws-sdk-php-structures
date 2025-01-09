<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecommendationTriggerData $data
 * @property string $id
 * @property list<string> $recommendationIds
 * @property 'ISSUE_DETECTION'|'RULE_EVALUATION'|'OTHER' $source
 * @property 'QUERY' $type
 */
class RecommendationTrigger extends Shape
{
    /**
     * @param array{
     *     data: RecommendationTriggerData,
     *     id: string,
     *     recommendationIds: list<string>,
     *     source: 'ISSUE_DETECTION'|'RULE_EVALUATION'|'OTHER',
     *     type: 'QUERY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

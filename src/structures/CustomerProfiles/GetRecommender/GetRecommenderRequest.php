<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetRecommender;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $RecommenderName
 * @property int<0, 5>|null $TrainingMetricsCount
 */
class GetRecommenderRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     RecommenderName: string,
     *     TrainingMetricsCount?: int<0, 5>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

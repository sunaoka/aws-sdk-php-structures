<?php

namespace Sunaoka\Aws\Structures\Redshift\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $ClusterIdentifier
 * @property string|null $NamespaceArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $RecommendationType
 * @property string|null $Title
 * @property string|null $Description
 * @property string|null $Observation
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $ImpactRanking
 * @property string|null $RecommendationText
 * @property list<RecommendedAction>|null $RecommendedActions
 * @property list<ReferenceLink>|null $ReferenceLinks
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ClusterIdentifier?: string|null,
     *     NamespaceArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     RecommendationType?: string|null,
     *     Title?: string|null,
     *     Description?: string|null,
     *     Observation?: string|null,
     *     ImpactRanking?: 'HIGH'|'MEDIUM'|'LOW'|null,
     *     RecommendationText?: string|null,
     *     RecommendedActions?: list<RecommendedAction>|null,
     *     ReferenceLinks?: list<ReferenceLink>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Redshift\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ClusterIdentifier
 * @property string $NamespaceArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $RecommendationType
 * @property string $Title
 * @property string $Description
 * @property string $Observation
 * @property 'HIGH'|'MEDIUM'|'LOW' $ImpactRanking
 * @property string $RecommendationText
 * @property list<RecommendedAction> $RecommendedActions
 * @property list<ReferenceLink> $ReferenceLinks
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ClusterIdentifier?: string,
     *     NamespaceArn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     RecommendationType?: string,
     *     Title?: string,
     *     Description?: string,
     *     Observation?: string,
     *     ImpactRanking?: 'HIGH'|'MEDIUM'|'LOW',
     *     RecommendationText?: string,
     *     RecommendedActions?: list<RecommendedAction>,
     *     ReferenceLinks?: list<ReferenceLink>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

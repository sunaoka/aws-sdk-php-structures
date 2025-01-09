<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecommendationId
 * @property string $TypeId
 * @property string $Severity
 * @property string $ResourceArn
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $UpdatedTime
 * @property string $Detection
 * @property string $Recommendation
 * @property string $Description
 * @property string $Reason
 * @property list<RecommendedAction> $RecommendedActions
 * @property string $Category
 * @property string $Source
 * @property string $TypeDetection
 * @property string $TypeRecommendation
 * @property string $Impact
 * @property string $AdditionalInfo
 * @property list<DocLink> $Links
 * @property IssueDetails $IssueDetails
 */
class DBRecommendation extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string,
     *     TypeId?: string,
     *     Severity?: string,
     *     ResourceArn?: string,
     *     Status?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     UpdatedTime?: \Aws\Api\DateTimeResult,
     *     Detection?: string,
     *     Recommendation?: string,
     *     Description?: string,
     *     Reason?: string,
     *     RecommendedActions?: list<RecommendedAction>,
     *     Category?: string,
     *     Source?: string,
     *     TypeDetection?: string,
     *     TypeRecommendation?: string,
     *     Impact?: string,
     *     AdditionalInfo?: string,
     *     Links?: list<DocLink>,
     *     IssueDetails?: IssueDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecommendationId
 * @property string|null $TypeId
 * @property string|null $Severity
 * @property string|null $ResourceArn
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $UpdatedTime
 * @property string|null $Detection
 * @property string|null $Recommendation
 * @property string|null $Description
 * @property string|null $Reason
 * @property list<RecommendedAction>|null $RecommendedActions
 * @property string|null $Category
 * @property string|null $Source
 * @property string|null $TypeDetection
 * @property string|null $TypeRecommendation
 * @property string|null $Impact
 * @property string|null $AdditionalInfo
 * @property list<DocLink>|null $Links
 * @property IssueDetails|null $IssueDetails
 */
class DBRecommendation extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string|null,
     *     TypeId?: string|null,
     *     Severity?: string|null,
     *     ResourceArn?: string|null,
     *     Status?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     Detection?: string|null,
     *     Recommendation?: string|null,
     *     Description?: string|null,
     *     Reason?: string|null,
     *     RecommendedActions?: list<RecommendedAction>|null,
     *     Category?: string|null,
     *     Source?: string|null,
     *     TypeDetection?: string|null,
     *     TypeRecommendation?: string|null,
     *     Impact?: string|null,
     *     AdditionalInfo?: string|null,
     *     Links?: list<DocLink>|null,
     *     IssueDetails?: IssueDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

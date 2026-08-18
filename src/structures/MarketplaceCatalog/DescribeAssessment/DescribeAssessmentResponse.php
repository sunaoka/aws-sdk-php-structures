<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AssessmentArn
 * @property string|null $AssessmentId
 * @property string|null $FrameworkId
 * @property Shapes\AssessmentTargetSummary|null $AssessmentTargetSummary
 * @property Shapes\FrameworkSummary|null $FrameworkSummary
 * @property 'PASS'|'FAIL'|null $AssessmentResult
 * @property string|null $CreatedAt
 * @property string|null $ExpiresAt
 * @property list<Shapes\ControlAssessment>|null $ControlAssessments
 * @property string|null $NextToken
 */
class DescribeAssessmentResponse extends Response
{
}

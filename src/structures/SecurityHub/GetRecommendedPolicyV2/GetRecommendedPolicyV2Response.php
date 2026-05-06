<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRecommendedPolicyV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property 'UNUSED_PERMISSION_RECOMMENDATION'|null $RecommendationType
 * @property list<Shapes\RecommendationStep>|null $RecommendationSteps
 * @property Shapes\RecommendationError|null $Error
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $Status
 * @property string|null $ResourceArn
 */
class GetRecommendedPolicyV2Response extends Response
{
}

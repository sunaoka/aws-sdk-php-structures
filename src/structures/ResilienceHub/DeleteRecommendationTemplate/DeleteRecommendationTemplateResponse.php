<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteRecommendationTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $recommendationTemplateArn
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $status
 */
class DeleteRecommendationTemplateResponse extends Response
{
}

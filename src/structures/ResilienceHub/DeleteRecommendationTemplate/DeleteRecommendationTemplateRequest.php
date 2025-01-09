<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteRecommendationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $recommendationTemplateArn
 */
class DeleteRecommendationTemplateRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     recommendationTemplateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

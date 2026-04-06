<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteReviewTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property string $ClientRequestToken
 */
class DeleteReviewTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

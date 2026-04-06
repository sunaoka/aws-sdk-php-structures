<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetReviewTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 */
class GetReviewTemplateRequest extends Request
{
    /**
     * @param array{TemplateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

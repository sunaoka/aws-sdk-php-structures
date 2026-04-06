<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetReviewTemplateLensReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property string $LensAlias
 */
class GetReviewTemplateLensReviewRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     LensAlias: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

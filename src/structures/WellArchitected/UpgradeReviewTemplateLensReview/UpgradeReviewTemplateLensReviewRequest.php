<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpgradeReviewTemplateLensReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property string $LensAlias
 * @property string $ClientRequestToken
 */
class UpgradeReviewTemplateLensReviewRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     LensAlias: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

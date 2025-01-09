<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateReviewTemplateLensReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property string $LensAlias
 * @property string $LensNotes
 * @property array<string, string> $PillarNotes
 */
class UpdateReviewTemplateLensReviewRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     LensAlias: string,
     *     LensNotes?: string,
     *     PillarNotes?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

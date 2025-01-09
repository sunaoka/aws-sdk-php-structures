<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetReviewTemplateAnswer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property string $LensAlias
 * @property string $QuestionId
 */
class GetReviewTemplateAnswerRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     LensAlias: string,
     *     QuestionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

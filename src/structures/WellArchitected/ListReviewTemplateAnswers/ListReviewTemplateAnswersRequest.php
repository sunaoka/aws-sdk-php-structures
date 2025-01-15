<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplateAnswers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property string $LensAlias
 * @property string|null $PillarId
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListReviewTemplateAnswersRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     LensAlias: string,
     *     PillarId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplateAnswers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property string $LensAlias
 * @property string $PillarId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListReviewTemplateAnswersRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     LensAlias: string,
     *     PillarId?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

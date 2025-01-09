<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetReviewTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property list<string> $Lenses
 * @property string $Notes
 * @property array<'UNANSWERED'|'ANSWERED', int<0, max>> $QuestionCounts
 * @property string $Owner
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $TemplateArn
 * @property string $TemplateName
 * @property array<string, string> $Tags
 * @property 'CURRENT'|'LENS_NOT_CURRENT' $UpdateStatus
 * @property string $ShareInvitationId
 */
class ReviewTemplate extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Lenses?: list<string>,
     *     Notes?: string,
     *     QuestionCounts?: array<'UNANSWERED'|'ANSWERED', int<0, max>>,
     *     Owner?: string,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     TemplateArn?: string,
     *     TemplateName?: string,
     *     Tags?: array<string, string>,
     *     UpdateStatus?: 'CURRENT'|'LENS_NOT_CURRENT',
     *     ShareInvitationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

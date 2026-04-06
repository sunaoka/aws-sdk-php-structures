<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetReviewTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property list<string>|null $Lenses
 * @property string|null $Notes
 * @property array<'UNANSWERED'|'ANSWERED', int<0, max>>|null $QuestionCounts
 * @property string|null $Owner
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $TemplateArn
 * @property string|null $TemplateName
 * @property array<string, string>|null $Tags
 * @property 'CURRENT'|'LENS_NOT_CURRENT'|null $UpdateStatus
 * @property string|null $ShareInvitationId
 */
class ReviewTemplate extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Lenses?: list<string>|null,
     *     Notes?: string|null,
     *     QuestionCounts?: array<'UNANSWERED'|'ANSWERED', int<0, max>>|null,
     *     Owner?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     TemplateArn?: string|null,
     *     TemplateName?: string|null,
     *     Tags?: array<string, string>|null,
     *     UpdateStatus?: 'CURRENT'|'LENS_NOT_CURRENT'|null,
     *     ShareInvitationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

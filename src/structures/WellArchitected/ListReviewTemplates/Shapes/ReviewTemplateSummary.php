<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property list<string> $Lenses
 * @property string $Owner
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $TemplateArn
 * @property string $TemplateName
 * @property 'CURRENT'|'LENS_NOT_CURRENT' $UpdateStatus
 */
class ReviewTemplateSummary extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Lenses?: list<string>,
     *     Owner?: string,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     TemplateArn?: string,
     *     TemplateName?: string,
     *     UpdateStatus?: 'CURRENT'|'LENS_NOT_CURRENT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property list<string>|null $Lenses
 * @property string|null $Owner
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $TemplateArn
 * @property string|null $TemplateName
 * @property 'CURRENT'|'LENS_NOT_CURRENT'|null $UpdateStatus
 */
class ReviewTemplateSummary extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Lenses?: list<string>|null,
     *     Owner?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     TemplateArn?: string|null,
     *     TemplateName?: string|null,
     *     UpdateStatus?: 'CURRENT'|'LENS_NOT_CURRENT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

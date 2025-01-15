<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetProfileTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TemplateName
 * @property list<ProfileTemplateQuestion>|null $TemplateQuestions
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class ProfileTemplate extends Shape
{
    /**
     * @param array{
     *     TemplateName?: string|null,
     *     TemplateQuestions?: list<ProfileTemplateQuestion>|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetProfileTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateName
 * @property list<ProfileTemplateQuestion> $TemplateQuestions
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class ProfileTemplate extends Shape
{
    /**
     * @param array{
     *     TemplateName?: string,
     *     TemplateQuestions?: list<ProfileTemplateQuestion>,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

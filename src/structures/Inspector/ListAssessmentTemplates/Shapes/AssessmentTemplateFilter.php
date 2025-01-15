<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namePattern
 * @property DurationRange|null $durationRange
 * @property list<string>|null $rulesPackageArns
 */
class AssessmentTemplateFilter extends Shape
{
    /**
     * @param array{
     *     namePattern?: string|null,
     *     durationRange?: DurationRange|null,
     *     rulesPackageArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

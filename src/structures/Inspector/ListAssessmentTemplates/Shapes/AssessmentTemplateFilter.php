<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $namePattern
 * @property DurationRange $durationRange
 * @property list<string> $rulesPackageArns
 */
class AssessmentTemplateFilter extends Shape
{
    /**
     * @param array{
     *     namePattern?: string,
     *     durationRange?: DurationRange,
     *     rulesPackageArns?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

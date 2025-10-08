<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeADAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Category
 * @property string|null $Name
 * @property string|null $Status
 * @property string|null $StatusCode
 * @property string|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdateDateTime
 */
class AssessmentValidation extends Shape
{
    /**
     * @param array{
     *     Category?: string|null,
     *     Name?: string|null,
     *     Status?: string|null,
     *     StatusCode?: string|null,
     *     StatusReason?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

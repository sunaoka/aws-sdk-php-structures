<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataSetIdentifier
 * @property string $Expression
 */
class RollingDateConfiguration extends Shape
{
    /**
     * @param array{
     *     DataSetIdentifier?: string|null,
     *     Expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

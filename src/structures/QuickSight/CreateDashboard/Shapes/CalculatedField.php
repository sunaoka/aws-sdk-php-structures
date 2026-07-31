<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataSetIdentifier
 * @property string|null $TopicIdentifier
 * @property string $Name
 * @property string $Expression
 */
class CalculatedField extends Shape
{
    /**
     * @param array{
     *     DataSetIdentifier?: string|null,
     *     TopicIdentifier?: string|null,
     *     Name: string,
     *     Expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

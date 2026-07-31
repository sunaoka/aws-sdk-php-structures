<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property string $TopicArn
 */
class TopicIdentifierDeclaration extends Shape
{
    /**
     * @param array{
     *     Identifier: string,
     *     TopicArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

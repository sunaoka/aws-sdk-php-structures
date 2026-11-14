<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterExtension\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExtensionHealthIssue> $Issues
 */
class ExtensionHealth extends Shape
{
    /**
     * @param array{Issues: list<ExtensionHealthIssue>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

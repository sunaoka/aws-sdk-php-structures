<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 */
class LambdaEndpointSummary extends Shape
{
    /**
     * @param array{Arn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

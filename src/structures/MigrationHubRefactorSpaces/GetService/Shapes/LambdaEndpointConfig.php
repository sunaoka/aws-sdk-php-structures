<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 */
class LambdaEndpointConfig extends Shape
{
    /**
     * @param array{Arn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

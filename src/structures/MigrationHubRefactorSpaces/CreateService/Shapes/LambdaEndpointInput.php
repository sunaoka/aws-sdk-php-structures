<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 */
class LambdaEndpointInput extends Shape
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorizedWithToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorDescription
 */
class EvaluationErrorItem extends Shape
{
    /**
     * @param array{errorDescription: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

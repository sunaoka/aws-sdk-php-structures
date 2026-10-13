<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunctionRevision\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attribute
 * @property string $errorCode
 * @property string $errorMessage
 */
class RevisionError extends Shape
{
    /**
     * @param array{
     *     attribute: string,
     *     errorCode: string,
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

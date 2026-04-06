<?php

namespace Sunaoka\Aws\Structures\Macie\AssociateS3Resources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Resource|null $failedItem
 * @property string|null $errorCode
 * @property string|null $errorMessage
 */
class FailedS3Resource extends Shape
{
    /**
     * @param array{
     *     failedItem?: S3Resource|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

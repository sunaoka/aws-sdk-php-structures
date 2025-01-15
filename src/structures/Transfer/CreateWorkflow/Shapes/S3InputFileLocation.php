<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property string|null $Key
 */
class S3InputFileLocation extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

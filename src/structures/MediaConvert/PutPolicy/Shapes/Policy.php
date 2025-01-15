<?php

namespace Sunaoka\Aws\Structures\MediaConvert\PutPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOWED'|'DISALLOWED'|null $HttpInputs
 * @property 'ALLOWED'|'DISALLOWED'|null $HttpsInputs
 * @property 'ALLOWED'|'DISALLOWED'|null $S3Inputs
 */
class Policy extends Shape
{
    /**
     * @param array{
     *     HttpInputs?: 'ALLOWED'|'DISALLOWED'|null,
     *     HttpsInputs?: 'ALLOWED'|'DISALLOWED'|null,
     *     S3Inputs?: 'ALLOWED'|'DISALLOWED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOWED'|'DISALLOWED' $HttpInputs
 * @property 'ALLOWED'|'DISALLOWED' $HttpsInputs
 * @property 'ALLOWED'|'DISALLOWED' $S3Inputs
 */
class Policy extends Shape
{
    /**
     * @param array{
     *     HttpInputs?: 'ALLOWED'|'DISALLOWED',
     *     HttpsInputs?: 'ALLOWED'|'DISALLOWED',
     *     S3Inputs?: 'ALLOWED'|'DISALLOWED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Comment
 * @property \Aws\Api\DateTimeResult $UploadEnd
 * @property double $UploadSize
 * @property \Aws\Api\DateTimeResult $UploadStart
 */
class ClientData extends Shape
{
    /**
     * @param array{
     *     Comment?: string,
     *     UploadEnd?: \Aws\Api\DateTimeResult,
     *     UploadSize?: double,
     *     UploadStart?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

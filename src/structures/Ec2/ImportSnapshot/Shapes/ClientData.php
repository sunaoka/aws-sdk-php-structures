<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Comment
 * @property \Aws\Api\DateTimeResult|null $UploadEnd
 * @property double|null $UploadSize
 * @property \Aws\Api\DateTimeResult|null $UploadStart
 */
class ClientData extends Shape
{
    /**
     * @param array{
     *     Comment?: string|null,
     *     UploadEnd?: \Aws\Api\DateTimeResult|null,
     *     UploadSize?: double|null,
     *     UploadStart?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

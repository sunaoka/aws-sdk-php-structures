<?php

namespace Sunaoka\Aws\Structures\Connect\BatchGetAttachedFileMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectUserArn
 * @property string $AWSIdentityArn
 */
class CreatedByInfo extends Shape
{
    /**
     * @param array{
     *     ConnectUserArn?: string,
     *     AWSIdentityArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

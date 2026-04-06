<?php

namespace Sunaoka\Aws\Structures\Connect\BatchGetAttachedFileMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectUserArn
 * @property string|null $AWSIdentityArn
 */
class CreatedByInfo extends Shape
{
    /**
     * @param array{
     *     ConnectUserArn?: string|null,
     *     AWSIdentityArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

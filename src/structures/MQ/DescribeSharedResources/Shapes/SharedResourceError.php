<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeSharedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUOTA_EXCEEDED'|'SHARE_NOT_FOUND'|'INVITE_FAILED'|'SETUP_INCOMPLETE'|'INTERNAL_ERROR'|'AZ_MISMATCH'|'RESOURCE_CONFIGURATION_NOT_FOUND' $Code
 * @property string $Message
 */
class SharedResourceError extends Shape
{
    /**
     * @param array{
     *     Code: 'QUOTA_EXCEEDED'|'SHARE_NOT_FOUND'|'INVITE_FAILED'|'SETUP_INCOMPLETE'|'INTERNAL_ERROR'|'AZ_MISMATCH'|'RESOURCE_CONFIGURATION_NOT_FOUND',
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

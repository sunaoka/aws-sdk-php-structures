<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PendingChange
 * @property string $Username
 */
class AwsAmazonMqBrokerUsersDetails extends Shape
{
    /**
     * @param array{
     *     PendingChange?: string,
     *     Username?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

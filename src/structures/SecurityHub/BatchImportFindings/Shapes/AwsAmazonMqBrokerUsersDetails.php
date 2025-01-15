<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PendingChange
 * @property string|null $Username
 */
class AwsAmazonMqBrokerUsersDetails extends Shape
{
    /**
     * @param array{
     *     PendingChange?: string|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

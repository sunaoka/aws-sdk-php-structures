<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAccountAuditConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $targetArn
 * @property string|null $roleArn
 * @property bool|null $enabled
 */
class AuditNotificationTarget extends Shape
{
    /**
     * @param array{
     *     targetArn?: string|null,
     *     roleArn?: string|null,
     *     enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

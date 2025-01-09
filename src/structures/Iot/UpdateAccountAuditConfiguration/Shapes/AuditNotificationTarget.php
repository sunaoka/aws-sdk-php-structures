<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateAccountAuditConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetArn
 * @property string $roleArn
 * @property bool $enabled
 */
class AuditNotificationTarget extends Shape
{
    /**
     * @param array{
     *     targetArn?: string,
     *     roleArn?: string,
     *     enabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

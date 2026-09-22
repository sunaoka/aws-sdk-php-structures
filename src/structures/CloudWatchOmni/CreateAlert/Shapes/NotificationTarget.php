<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'sns'|'slack'|'pagerduty' $type
 * @property string $arn
 * @property array<string, string>|null $metadata
 */
class NotificationTarget extends Shape
{
    /**
     * @param array{
     *     type: 'sns'|'slack'|'pagerduty',
     *     arn: string,
     *     metadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WorkDocs\AddResourcePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SendEmail
 * @property string $EmailMessage
 */
class NotificationOptions extends Shape
{
    /**
     * @param array{
     *     SendEmail?: bool,
     *     EmailMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

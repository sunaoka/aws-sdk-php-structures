<?php

namespace Sunaoka\Aws\Structures\WorkDocs\AddResourcePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $SendEmail
 * @property string|null $EmailMessage
 */
class NotificationOptions extends Shape
{
    /**
     * @param array{
     *     SendEmail?: bool|null,
     *     EmailMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

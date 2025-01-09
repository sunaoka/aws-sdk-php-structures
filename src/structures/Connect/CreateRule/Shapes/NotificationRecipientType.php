<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $UserTags
 * @property list<string> $UserIds
 */
class NotificationRecipientType extends Shape
{
    /**
     * @param array{
     *     UserTags?: array<string, string>,
     *     UserIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

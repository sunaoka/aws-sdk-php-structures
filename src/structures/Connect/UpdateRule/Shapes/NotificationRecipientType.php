<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $UserTags
 * @property list<string>|null $UserIds
 */
class NotificationRecipientType extends Shape
{
    /**
     * @param array{
     *     UserTags?: array<string, string>|null,
     *     UserIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

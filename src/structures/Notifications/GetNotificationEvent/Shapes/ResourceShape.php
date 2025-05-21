<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $detailUrl
 * @property list<string>|null $tags
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     detailUrl?: string|null,
     *     tags?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $detailUrl
 * @property list<string> $tags
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     detailUrl?: string,
     *     tags?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

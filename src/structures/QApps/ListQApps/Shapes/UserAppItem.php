<?php

namespace Sunaoka\Aws\Structures\QApps\ListQApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $appArn
 * @property string $title
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property bool|null $canEdit
 * @property string|null $status
 */
class UserAppItem extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     appArn: string,
     *     title: string,
     *     description?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     canEdit?: bool|null,
     *     status?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

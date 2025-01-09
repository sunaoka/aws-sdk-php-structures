<?php

namespace Sunaoka\Aws\Structures\QApps\ListQApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $appArn
 * @property string $title
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property bool $canEdit
 * @property string $status
 * @property bool $isVerified
 */
class UserAppItem extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     appArn: string,
     *     title: string,
     *     description?: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     canEdit?: bool,
     *     status?: string,
     *     isVerified?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

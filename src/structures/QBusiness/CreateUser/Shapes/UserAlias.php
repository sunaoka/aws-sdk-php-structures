<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $indexId
 * @property string|null $dataSourceId
 * @property string $userId
 */
class UserAlias extends Shape
{
    /**
     * @param array{
     *     indexId?: string|null,
     *     dataSourceId?: string|null,
     *     userId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

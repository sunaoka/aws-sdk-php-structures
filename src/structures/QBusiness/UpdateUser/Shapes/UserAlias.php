<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $indexId
 * @property string $dataSourceId
 * @property string $userId
 */
class UserAlias extends Shape
{
    /**
     * @param array{
     *     indexId?: string,
     *     dataSourceId?: string,
     *     userId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

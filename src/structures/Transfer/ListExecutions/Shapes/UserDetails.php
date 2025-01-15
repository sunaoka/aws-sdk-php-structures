<?php

namespace Sunaoka\Aws\Structures\Transfer\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $ServerId
 * @property string|null $SessionId
 */
class UserDetails extends Shape
{
    /**
     * @param array{
     *     UserName: string,
     *     ServerId: string,
     *     SessionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

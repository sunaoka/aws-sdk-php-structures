<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PostAcceptTimeoutConfig $PostAcceptTimeoutConfig
 * @property list<'CALL'|'DISCARD'> $AllowedUserActions
 */
class Preview extends Shape
{
    /**
     * @param array{
     *     PostAcceptTimeoutConfig: PostAcceptTimeoutConfig,
     *     AllowedUserActions: list<'CALL'|'DISCARD'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserAgent
 * @property bool $IsNewForEntireAccount
 */
class NewUserAgentDetail extends Shape
{
    /**
     * @param array{
     *     UserAgent?: string,
     *     IsNewForEntireAccount?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

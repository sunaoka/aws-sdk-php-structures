<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserAgent
 * @property bool|null $IsNewForEntireAccount
 */
class NewUserAgentDetail extends Shape
{
    /**
     * @param array{
     *     UserAgent?: string|null,
     *     IsNewForEntireAccount?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

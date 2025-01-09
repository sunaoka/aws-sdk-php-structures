<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceBot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LexConfiguration $Lex
 */
class Configuration extends Shape
{
    /**
     * @param array{Lex: LexConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

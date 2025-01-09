<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $responseMap
 */
class AuthChallengeResponse extends Shape
{
    /**
     * @param array{responseMap: array<string, string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizationUrl
 */
class AuthChallengeRequest extends Shape
{
    /**
     * @param array{authorizationUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

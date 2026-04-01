<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizationUrl
 */
class OAuthAdditionalStepDetails extends Shape
{
    /**
     * @param array{authorizationUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

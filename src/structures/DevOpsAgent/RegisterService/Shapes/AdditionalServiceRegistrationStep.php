<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OAuthAdditionalStepDetails|null $oauth
 */
class AdditionalServiceRegistrationStep extends Shape
{
    /**
     * @param array{oauth?: OAuthAdditionalStepDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

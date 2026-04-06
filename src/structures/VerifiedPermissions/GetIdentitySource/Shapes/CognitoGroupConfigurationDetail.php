<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupEntityType
 */
class CognitoGroupConfigurationDetail extends Shape
{
    /**
     * @param array{groupEntityType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

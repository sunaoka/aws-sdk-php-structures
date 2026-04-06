<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupEntityType
 */
class UpdateCognitoGroupConfiguration extends Shape
{
    /**
     * @param array{groupEntityType: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

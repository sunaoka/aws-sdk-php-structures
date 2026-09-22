<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetDomainForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identityCenterInstanceArn
 */
class IdentityCenterConfiguration extends Shape
{
    /**
     * @param array{identityCenterInstanceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

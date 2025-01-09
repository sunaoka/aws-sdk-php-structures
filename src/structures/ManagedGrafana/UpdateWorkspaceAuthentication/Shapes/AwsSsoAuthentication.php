<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ssoClientId
 */
class AwsSsoAuthentication extends Shape
{
    /**
     * @param array{ssoClientId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

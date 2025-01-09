<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'CLOUDFRONT'|'API_GATEWAY'|'COGNITO_USER_POOL'|'APP_RUNNER_SERVICE'|'VERIFIED_ACCESS_INSTANCE', RequestBodyAssociatedResourceTypeConfig> $RequestBody
 */
class AssociationConfig extends Shape
{
    /**
     * @param array{RequestBody?: array<'CLOUDFRONT'|'API_GATEWAY'|'COGNITO_USER_POOL'|'APP_RUNNER_SERVICE'|'VERIFIED_ACCESS_INSTANCE', RequestBodyAssociatedResourceTypeConfig>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

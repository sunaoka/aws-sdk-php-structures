<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\CreateTokenWithIAM\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identityContext
 */
class AwsAdditionalDetails extends Shape
{
    /**
     * @param array{identityContext?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

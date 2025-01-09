<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserManagedClientApplicationClientId
 * @property string $AWSManagedClientApplicationReference
 */
class OAuth2ClientApplication extends Shape
{
    /**
     * @param array{
     *     UserManagedClientApplicationClientId?: string,
     *     AWSManagedClientApplicationReference?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

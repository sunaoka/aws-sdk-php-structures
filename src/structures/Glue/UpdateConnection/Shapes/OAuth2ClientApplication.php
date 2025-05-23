<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserManagedClientApplicationClientId
 * @property string|null $AWSManagedClientApplicationReference
 */
class OAuth2ClientApplication extends Shape
{
    /**
     * @param array{
     *     UserManagedClientApplicationClientId?: string|null,
     *     AWSManagedClientApplicationReference?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

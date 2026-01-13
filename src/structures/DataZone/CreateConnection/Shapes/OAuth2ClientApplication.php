<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userManagedClientApplicationClientId
 * @property string|null $aWSManagedClientApplicationReference
 */
class OAuth2ClientApplication extends Shape
{
    /**
     * @param array{
     *     userManagedClientApplicationClientId?: string|null,
     *     aWSManagedClientApplicationReference?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

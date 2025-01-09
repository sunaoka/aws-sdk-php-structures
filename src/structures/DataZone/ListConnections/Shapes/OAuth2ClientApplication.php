<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aWSManagedClientApplicationReference
 * @property string $userManagedClientApplicationClientId
 */
class OAuth2ClientApplication extends Shape
{
    /**
     * @param array{
     *     aWSManagedClientApplicationReference?: string,
     *     userManagedClientApplicationClientId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

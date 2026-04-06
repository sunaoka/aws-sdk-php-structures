<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $aWSManagedClientApplicationReference
 * @property string|null $userManagedClientApplicationClientId
 */
class OAuth2ClientApplication extends Shape
{
    /**
     * @param array{
     *     aWSManagedClientApplicationReference?: string|null,
     *     userManagedClientApplicationClientId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

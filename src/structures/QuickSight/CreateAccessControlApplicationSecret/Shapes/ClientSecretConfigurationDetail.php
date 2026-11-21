<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplicationSecret\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdpClientSecretInput|null $Idp
 */
class ClientSecretConfigurationDetail extends Shape
{
    /**
     * @param array{Idp?: IdpClientSecretInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

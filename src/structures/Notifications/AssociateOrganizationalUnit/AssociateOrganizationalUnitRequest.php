<?php

namespace Sunaoka\Aws\Structures\Notifications\AssociateOrganizationalUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $organizationalUnitId
 * @property string $notificationConfigurationArn
 */
class AssociateOrganizationalUnitRequest extends Request
{
    /**
     * @param array{
     *     organizationalUnitId: string,
     *     notificationConfigurationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

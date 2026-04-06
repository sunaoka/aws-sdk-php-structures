<?php

namespace Sunaoka\Aws\Structures\Notifications\DisassociateOrganizationalUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $organizationalUnitId
 * @property string $notificationConfigurationArn
 */
class DisassociateOrganizationalUnitRequest extends Request
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

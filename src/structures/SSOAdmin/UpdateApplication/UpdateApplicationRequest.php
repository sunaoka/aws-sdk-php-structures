<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property string $Description
 * @property string $Name
 * @property Shapes\UpdateApplicationPortalOptions $PortalOptions
 * @property 'ENABLED'|'DISABLED' $Status
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     Description?: string,
     *     Name?: string,
     *     PortalOptions?: Shapes\UpdateApplicationPortalOptions,
     *     Status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property Shapes\UpdateApplicationPortalOptions|null $PortalOptions
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     PortalOptions?: Shapes\UpdateApplicationPortalOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

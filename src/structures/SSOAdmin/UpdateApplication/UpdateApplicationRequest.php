<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property string|null $Description
 * @property string|null $Name
 * @property Shapes\UpdateApplicationPortalOptions|null $PortalOptions
 * @property 'ENABLED'|'DISABLED'|null $Status
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     Description?: string|null,
     *     Name?: string|null,
     *     PortalOptions?: Shapes\UpdateApplicationPortalOptions|null,
     *     Status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

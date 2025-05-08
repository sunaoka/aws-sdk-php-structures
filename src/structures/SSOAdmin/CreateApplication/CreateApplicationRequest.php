<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $ApplicationProviderArn
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\PortalOptions|null $PortalOptions
 * @property list<Shapes\Tag>|null $Tags
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property string|null $ClientToken
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     ApplicationProviderArn: string,
     *     Name: string,
     *     Description?: string|null,
     *     PortalOptions?: Shapes\PortalOptions|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

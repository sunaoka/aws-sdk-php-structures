<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationProviderArn
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property string $InstanceArn
 * @property string $Name
 * @property Shapes\PortalOptions|null $PortalOptions
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationProviderArn: string,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     InstanceArn: string,
     *     Name: string,
     *     PortalOptions?: Shapes\PortalOptions|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

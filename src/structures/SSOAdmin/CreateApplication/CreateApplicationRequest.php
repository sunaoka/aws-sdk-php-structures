<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationProviderArn
 * @property string $ClientToken
 * @property string $Description
 * @property string $InstanceArn
 * @property string $Name
 * @property Shapes\PortalOptions $PortalOptions
 * @property 'ENABLED'|'DISABLED' $Status
 * @property list<Shapes\Tag> $Tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationProviderArn: string,
     *     ClientToken?: string,
     *     Description?: string,
     *     InstanceArn: string,
     *     Name: string,
     *     PortalOptions?: Shapes\PortalOptions,
     *     Status?: 'ENABLED'|'DISABLED',
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

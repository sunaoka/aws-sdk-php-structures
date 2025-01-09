<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Namespace
 * @property string $Description
 * @property Shapes\ApplicationSourceConfig $ApplicationSourceConfig
 * @property list<Shapes\Subscription> $Subscriptions
 * @property list<Shapes\Publication> $Publications
 * @property string $ClientToken
 * @property array<string, string> $Tags
 * @property list<string> $Permissions
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Namespace: string,
     *     Description?: string,
     *     ApplicationSourceConfig: Shapes\ApplicationSourceConfig,
     *     Subscriptions?: list<Shapes\Subscription>,
     *     Publications?: list<Shapes\Publication>,
     *     ClientToken?: string,
     *     Tags?: array<string, string>,
     *     Permissions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

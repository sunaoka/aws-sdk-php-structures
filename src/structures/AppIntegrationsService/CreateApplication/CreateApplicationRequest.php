<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Namespace
 * @property string|null $Description
 * @property Shapes\ApplicationSourceConfig $ApplicationSourceConfig
 * @property list<Shapes\Subscription>|null $Subscriptions
 * @property list<Shapes\Publication>|null $Publications
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 * @property list<string>|null $Permissions
 * @property bool|null $IsService
 * @property int<1, 600000>|null $InitializationTimeout
 * @property Shapes\ApplicationConfig|null $ApplicationConfig
 * @property Shapes\IframeConfig|null $IframeConfig
 * @property 'STANDARD'|'SERVICE'|'MCP_SERVER'|null $ApplicationType
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Namespace: string,
     *     Description?: string|null,
     *     ApplicationSourceConfig: Shapes\ApplicationSourceConfig,
     *     Subscriptions?: list<Shapes\Subscription>|null,
     *     Publications?: list<Shapes\Publication>|null,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null,
     *     Permissions?: list<string>|null,
     *     IsService?: bool|null,
     *     InitializationTimeout?: int<1, 600000>|null,
     *     ApplicationConfig?: Shapes\ApplicationConfig|null,
     *     IframeConfig?: Shapes\IframeConfig|null,
     *     ApplicationType?: 'STANDARD'|'SERVICE'|'MCP_SERVER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

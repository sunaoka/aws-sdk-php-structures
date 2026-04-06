<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\ApplicationSourceConfig|null $ApplicationSourceConfig
 * @property list<Shapes\Subscription>|null $Subscriptions
 * @property list<Shapes\Publication>|null $Publications
 * @property list<string>|null $Permissions
 * @property bool|null $IsService
 * @property int<1, 600000>|null $InitializationTimeout
 * @property Shapes\ApplicationConfig|null $ApplicationConfig
 * @property Shapes\IframeConfig|null $IframeConfig
 * @property 'STANDARD'|'SERVICE'|'MCP_SERVER'|null $ApplicationType
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ApplicationSourceConfig?: Shapes\ApplicationSourceConfig|null,
     *     Subscriptions?: list<Shapes\Subscription>|null,
     *     Publications?: list<Shapes\Publication>|null,
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

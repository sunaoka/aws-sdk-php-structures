<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlowModule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string|null $Description
 * @property string $Content
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 * @property string|null $Settings
 * @property Shapes\ExternalInvocationConfiguration|null $ExternalInvocationConfiguration
 */
class CreateContactFlowModuleRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string|null,
     *     Content: string,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null,
     *     Settings?: string|null,
     *     ExternalInvocationConfiguration?: Shapes\ExternalInvocationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

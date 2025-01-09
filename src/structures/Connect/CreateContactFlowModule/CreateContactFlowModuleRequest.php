<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlowModule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string $Description
 * @property string $Content
 * @property array<string, string> $Tags
 * @property string $ClientToken
 */
class CreateContactFlowModuleRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string,
     *     Content: string,
     *     Tags?: array<string, string>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

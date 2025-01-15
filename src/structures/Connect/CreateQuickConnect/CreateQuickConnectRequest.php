<?php

namespace Sunaoka\Aws\Structures\Connect\CreateQuickConnect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\QuickConnectConfig $QuickConnectConfig
 * @property array<string, string>|null $Tags
 */
class CreateQuickConnectRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string|null,
     *     QuickConnectConfig: Shapes\QuickConnectConfig,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

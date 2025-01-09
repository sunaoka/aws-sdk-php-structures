<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQuickConnectConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QuickConnectId
 * @property Shapes\QuickConnectConfig $QuickConnectConfig
 */
class UpdateQuickConnectConfigRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QuickConnectId: string,
     *     QuickConnectConfig: Shapes\QuickConnectConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteQuickConnect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QuickConnectId
 */
class DeleteQuickConnectRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QuickConnectId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

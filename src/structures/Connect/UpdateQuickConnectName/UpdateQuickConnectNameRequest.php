<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQuickConnectName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QuickConnectId
 * @property string $Name
 * @property string $Description
 */
class UpdateQuickConnectNameRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QuickConnectId: string,
     *     Name?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

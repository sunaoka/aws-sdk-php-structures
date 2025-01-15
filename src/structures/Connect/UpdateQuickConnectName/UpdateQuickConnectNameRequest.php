<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQuickConnectName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QuickConnectId
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateQuickConnectNameRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QuickConnectId: string,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

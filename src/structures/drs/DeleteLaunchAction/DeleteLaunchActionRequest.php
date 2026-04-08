<?php

namespace Sunaoka\Aws\Structures\drs\DeleteLaunchAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceId
 * @property string $actionId
 */
class DeleteLaunchActionRequest extends Request
{
    /**
     * @param array{
     *     resourceId: string,
     *     actionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

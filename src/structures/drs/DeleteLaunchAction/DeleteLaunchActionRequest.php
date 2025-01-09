<?php

namespace Sunaoka\Aws\Structures\drs\DeleteLaunchAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $actionId
 * @property string $resourceId
 */
class DeleteLaunchActionRequest extends Request
{
    /**
     * @param array{
     *     actionId: string,
     *     resourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

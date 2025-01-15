<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\DeleteTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetAddress
 * @property bool|null $ForceUnsubscribeAll
 */
class DeleteTargetRequest extends Request
{
    /**
     * @param array{
     *     TargetAddress: string,
     *     ForceUnsubscribeAll?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

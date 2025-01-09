<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventBusName
 * @property string $Action
 * @property string $Principal
 * @property string $StatementId
 * @property Shapes\Condition $Condition
 * @property string $Policy
 */
class PutPermissionRequest extends Request
{
    /**
     * @param array{
     *     EventBusName?: string,
     *     Action?: string,
     *     Principal?: string,
     *     StatementId?: string,
     *     Condition?: Shapes\Condition,
     *     Policy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

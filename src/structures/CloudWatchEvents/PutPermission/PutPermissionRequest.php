<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EventBusName
 * @property string|null $Action
 * @property string|null $Principal
 * @property string|null $StatementId
 * @property Shapes\Condition|null $Condition
 * @property string|null $Policy
 */
class PutPermissionRequest extends Request
{
    /**
     * @param array{
     *     EventBusName?: string|null,
     *     Action?: string|null,
     *     Principal?: string|null,
     *     StatementId?: string|null,
     *     Condition?: Shapes\Condition|null,
     *     Policy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

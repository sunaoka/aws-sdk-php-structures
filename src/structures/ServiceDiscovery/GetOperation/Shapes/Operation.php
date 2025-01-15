<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'CREATE_NAMESPACE'|'DELETE_NAMESPACE'|'UPDATE_NAMESPACE'|'UPDATE_SERVICE'|'REGISTER_INSTANCE'|'DEREGISTER_INSTANCE'|null $Type
 * @property 'SUBMITTED'|'PENDING'|'SUCCESS'|'FAIL'|null $Status
 * @property string|null $ErrorMessage
 * @property string|null $ErrorCode
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property \Aws\Api\DateTimeResult|null $UpdateDate
 * @property array<'NAMESPACE'|'SERVICE'|'INSTANCE', string>|null $Targets
 */
class Operation extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: 'CREATE_NAMESPACE'|'DELETE_NAMESPACE'|'UPDATE_NAMESPACE'|'UPDATE_SERVICE'|'REGISTER_INSTANCE'|'DEREGISTER_INSTANCE'|null,
     *     Status?: 'SUBMITTED'|'PENDING'|'SUCCESS'|'FAIL'|null,
     *     ErrorMessage?: string|null,
     *     ErrorCode?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     UpdateDate?: \Aws\Api\DateTimeResult|null,
     *     Targets?: array<'NAMESPACE'|'SERVICE'|'INSTANCE', string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

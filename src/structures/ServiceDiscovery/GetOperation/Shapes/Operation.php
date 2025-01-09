<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'CREATE_NAMESPACE'|'DELETE_NAMESPACE'|'UPDATE_NAMESPACE'|'UPDATE_SERVICE'|'REGISTER_INSTANCE'|'DEREGISTER_INSTANCE' $Type
 * @property 'SUBMITTED'|'PENDING'|'SUCCESS'|'FAIL' $Status
 * @property string $ErrorMessage
 * @property string $ErrorCode
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property \Aws\Api\DateTimeResult $UpdateDate
 * @property array<'NAMESPACE'|'SERVICE'|'INSTANCE', string> $Targets
 */
class Operation extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Type?: 'CREATE_NAMESPACE'|'DELETE_NAMESPACE'|'UPDATE_NAMESPACE'|'UPDATE_SERVICE'|'REGISTER_INSTANCE'|'DEREGISTER_INSTANCE',
     *     Status?: 'SUBMITTED'|'PENDING'|'SUCCESS'|'FAIL',
     *     ErrorMessage?: string,
     *     ErrorCode?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     UpdateDate?: \Aws\Api\DateTimeResult,
     *     Targets?: array<'NAMESPACE'|'SERVICE'|'INSTANCE', string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

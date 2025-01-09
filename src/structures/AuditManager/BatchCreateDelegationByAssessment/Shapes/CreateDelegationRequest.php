<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchCreateDelegationByAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $comment
 * @property string $controlSetId
 * @property string $roleArn
 * @property 'PROCESS_OWNER'|'RESOURCE_OWNER' $roleType
 */
class CreateDelegationRequest extends Shape
{
    /**
     * @param array{
     *     comment?: string,
     *     controlSetId?: string,
     *     roleArn?: string,
     *     roleType?: 'PROCESS_OWNER'|'RESOURCE_OWNER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

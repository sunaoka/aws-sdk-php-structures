<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchCreateDelegationByAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $comment
 * @property string|null $controlSetId
 * @property string|null $roleArn
 * @property 'PROCESS_OWNER'|'RESOURCE_OWNER'|null $roleType
 */
class CreateDelegationRequest extends Shape
{
    /**
     * @param array{
     *     comment?: string|null,
     *     controlSetId?: string|null,
     *     roleArn?: string|null,
     *     roleType?: 'PROCESS_OWNER'|'RESOURCE_OWNER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

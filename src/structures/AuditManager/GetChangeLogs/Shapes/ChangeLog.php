<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetChangeLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASSESSMENT'|'CONTROL_SET'|'CONTROL'|'DELEGATION'|'ASSESSMENT_REPORT'|null $objectType
 * @property string|null $objectName
 * @property 'CREATE'|'UPDATE_METADATA'|'ACTIVE'|'INACTIVE'|'DELETE'|'UNDER_REVIEW'|'REVIEWED'|'IMPORT_EVIDENCE'|null $action
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 */
class ChangeLog extends Shape
{
    /**
     * @param array{
     *     objectType?: 'ASSESSMENT'|'CONTROL_SET'|'CONTROL'|'DELEGATION'|'ASSESSMENT_REPORT'|null,
     *     objectName?: string|null,
     *     action?: 'CREATE'|'UPDATE_METADATA'|'ACTIVE'|'INACTIVE'|'DELETE'|'UNDER_REVIEW'|'REVIEWED'|'IMPORT_EVIDENCE'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetChangeLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASSESSMENT'|'CONTROL_SET'|'CONTROL'|'DELEGATION'|'ASSESSMENT_REPORT' $objectType
 * @property string $objectName
 * @property 'CREATE'|'UPDATE_METADATA'|'ACTIVE'|'INACTIVE'|'DELETE'|'UNDER_REVIEW'|'REVIEWED'|'IMPORT_EVIDENCE' $action
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 */
class ChangeLog extends Shape
{
    /**
     * @param array{
     *     objectType?: 'ASSESSMENT'|'CONTROL_SET'|'CONTROL'|'DELEGATION'|'ASSESSMENT_REPORT',
     *     objectName?: string,
     *     action?: 'CREATE'|'UPDATE_METADATA'|'ACTIVE'|'INACTIVE'|'DELETE'|'UNDER_REVIEW'|'REVIEWED'|'IMPORT_EVIDENCE',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

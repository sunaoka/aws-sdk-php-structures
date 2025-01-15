<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'ARCHIVED'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'PROCESSING_UPLOAD'|'UPLOAD_FAILED'|null $status
 * @property string|null $referenceArn
 * @property \Aws\Api\DateTimeResult|null $createdAfter
 * @property \Aws\Api\DateTimeResult|null $createdBefore
 * @property string|null $sampleId
 * @property string|null $subjectId
 * @property string|null $generatedFrom
 * @property 'IMPORT'|'UPLOAD'|null $creationType
 */
class ReadSetFilter extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     status?: 'ARCHIVED'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'PROCESSING_UPLOAD'|'UPLOAD_FAILED'|null,
     *     referenceArn?: string|null,
     *     createdAfter?: \Aws\Api\DateTimeResult|null,
     *     createdBefore?: \Aws\Api\DateTimeResult|null,
     *     sampleId?: string|null,
     *     subjectId?: string|null,
     *     generatedFrom?: string|null,
     *     creationType?: 'IMPORT'|'UPLOAD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

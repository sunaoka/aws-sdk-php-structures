<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'ARCHIVED'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'PROCESSING_UPLOAD'|'UPLOAD_FAILED' $status
 * @property string $referenceArn
 * @property \Aws\Api\DateTimeResult $createdAfter
 * @property \Aws\Api\DateTimeResult $createdBefore
 * @property string $sampleId
 * @property string $subjectId
 * @property string $generatedFrom
 * @property 'IMPORT'|'UPLOAD' $creationType
 */
class ReadSetFilter extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     status?: 'ARCHIVED'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'PROCESSING_UPLOAD'|'UPLOAD_FAILED',
     *     referenceArn?: string,
     *     createdAfter?: \Aws\Api\DateTimeResult,
     *     createdBefore?: \Aws\Api\DateTimeResult,
     *     sampleId?: string,
     *     subjectId?: string,
     *     generatedFrom?: string,
     *     creationType?: 'IMPORT'|'UPLOAD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

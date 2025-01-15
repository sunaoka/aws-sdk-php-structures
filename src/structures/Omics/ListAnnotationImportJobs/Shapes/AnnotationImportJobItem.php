<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $destinationName
 * @property string $versionName
 * @property string $roleArn
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property \Aws\Api\DateTimeResult|null $completionTime
 * @property bool|null $runLeftNormalization
 * @property array<string, string>|null $annotationFields
 */
class AnnotationImportJobItem extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     destinationName: string,
     *     versionName: string,
     *     roleArn: string,
     *     status: 'SUBMITTED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     completionTime?: \Aws\Api\DateTimeResult|null,
     *     runLeftNormalization?: bool|null,
     *     annotationFields?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

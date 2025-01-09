<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property int $CompletedPieces
 * @property string $CompletionDate
 * @property string $CreationDate
 * @property ImportJobResource $Definition
 * @property int $FailedPieces
 * @property list<string> $Failures
 * @property string $Id
 * @property 'CREATED'|'PREPARING_FOR_INITIALIZATION'|'INITIALIZING'|'PROCESSING'|'PENDING_JOB'|'COMPLETING'|'COMPLETED'|'FAILING'|'FAILED' $JobStatus
 * @property int $TotalFailures
 * @property int $TotalPieces
 * @property int $TotalProcessed
 * @property string $Type
 */
class ImportJobResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CompletedPieces?: int,
     *     CompletionDate?: string,
     *     CreationDate: string,
     *     Definition: ImportJobResource,
     *     FailedPieces?: int,
     *     Failures?: list<string>,
     *     Id: string,
     *     JobStatus: 'CREATED'|'PREPARING_FOR_INITIALIZATION'|'INITIALIZING'|'PROCESSING'|'PENDING_JOB'|'COMPLETING'|'COMPLETED'|'FAILING'|'FAILED',
     *     TotalFailures?: int,
     *     TotalPieces?: int,
     *     TotalProcessed?: int,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

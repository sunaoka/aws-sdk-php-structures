<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property int|null $CompletedPieces
 * @property string|null $CompletionDate
 * @property string $CreationDate
 * @property ImportJobResource $Definition
 * @property int|null $FailedPieces
 * @property list<string>|null $Failures
 * @property string $Id
 * @property 'CREATED'|'PREPARING_FOR_INITIALIZATION'|'INITIALIZING'|'PROCESSING'|'PENDING_JOB'|'COMPLETING'|'COMPLETED'|'FAILING'|'FAILED' $JobStatus
 * @property int|null $TotalFailures
 * @property int|null $TotalPieces
 * @property int|null $TotalProcessed
 * @property string $Type
 */
class ImportJobResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CompletedPieces?: int|null,
     *     CompletionDate?: string|null,
     *     CreationDate: string,
     *     Definition: ImportJobResource,
     *     FailedPieces?: int|null,
     *     Failures?: list<string>|null,
     *     Id: string,
     *     JobStatus: 'CREATED'|'PREPARING_FOR_INITIALIZATION'|'INITIALIZING'|'PROCESSING'|'PENDING_JOB'|'COMPLETING'|'COMPLETED'|'FAILING'|'FAILED',
     *     TotalFailures?: int|null,
     *     TotalPieces?: int|null,
     *     TotalProcessed?: int|null,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

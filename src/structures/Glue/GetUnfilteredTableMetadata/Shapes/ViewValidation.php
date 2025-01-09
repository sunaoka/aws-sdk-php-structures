<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT'|'ATHENA'|'SPARK' $Dialect
 * @property string $DialectVersion
 * @property string $ViewValidationText
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCESS'|'STOPPED'|'FAILED' $State
 * @property ErrorDetail $Error
 */
class ViewValidation extends Shape
{
    /**
     * @param array{
     *     Dialect?: 'REDSHIFT'|'ATHENA'|'SPARK',
     *     DialectVersion?: string,
     *     ViewValidationText?: string,
     *     UpdateTime?: \Aws\Api\DateTimeResult,
     *     State?: 'QUEUED'|'IN_PROGRESS'|'SUCCESS'|'STOPPED'|'FAILED',
     *     Error?: ErrorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

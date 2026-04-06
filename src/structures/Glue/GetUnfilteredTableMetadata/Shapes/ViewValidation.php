<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT'|'ATHENA'|'SPARK'|null $Dialect
 * @property string|null $DialectVersion
 * @property string|null $ViewValidationText
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCESS'|'STOPPED'|'FAILED'|null $State
 * @property ErrorDetail|null $Error
 */
class ViewValidation extends Shape
{
    /**
     * @param array{
     *     Dialect?: 'REDSHIFT'|'ATHENA'|'SPARK'|null,
     *     DialectVersion?: string|null,
     *     ViewValidationText?: string|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'QUEUED'|'IN_PROGRESS'|'SUCCESS'|'STOPPED'|'FAILED'|null,
     *     Error?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

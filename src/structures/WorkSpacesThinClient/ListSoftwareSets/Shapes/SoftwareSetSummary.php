<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\ListSoftwareSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $version
 * @property \Aws\Api\DateTimeResult $releasedAt
 * @property \Aws\Api\DateTimeResult $supportedUntil
 * @property 'VALIDATED'|'NOT_VALIDATED' $validationStatus
 * @property string $arn
 */
class SoftwareSetSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     version?: string,
     *     releasedAt?: \Aws\Api\DateTimeResult,
     *     supportedUntil?: \Aws\Api\DateTimeResult,
     *     validationStatus?: 'VALIDATED'|'NOT_VALIDATED',
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

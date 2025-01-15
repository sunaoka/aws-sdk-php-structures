<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\ListSoftwareSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $version
 * @property \Aws\Api\DateTimeResult|null $releasedAt
 * @property \Aws\Api\DateTimeResult|null $supportedUntil
 * @property 'VALIDATED'|'NOT_VALIDATED'|null $validationStatus
 * @property string|null $arn
 */
class SoftwareSetSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     version?: string|null,
     *     releasedAt?: \Aws\Api\DateTimeResult|null,
     *     supportedUntil?: \Aws\Api\DateTimeResult|null,
     *     validationStatus?: 'VALIDATED'|'NOT_VALIDATED'|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

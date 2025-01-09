<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetSoftwareSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $version
 * @property \Aws\Api\DateTimeResult $releasedAt
 * @property \Aws\Api\DateTimeResult $supportedUntil
 * @property 'VALIDATED'|'NOT_VALIDATED' $validationStatus
 * @property list<Software> $software
 * @property string $arn
 * @property array<string, string> $tags
 */
class SoftwareSet extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     version?: string,
     *     releasedAt?: \Aws\Api\DateTimeResult,
     *     supportedUntil?: \Aws\Api\DateTimeResult,
     *     validationStatus?: 'VALIDATED'|'NOT_VALIDATED',
     *     software?: list<Software>,
     *     arn?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

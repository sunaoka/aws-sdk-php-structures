<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ETag
 * @property string $Key
 * @property string $VersionId
 */
class S3Object extends Shape
{
    /**
     * @param array{
     *     ETag?: string,
     *     Key?: string,
     *     VersionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

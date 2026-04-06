<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ETag
 * @property string|null $Key
 * @property string|null $VersionId
 */
class S3Object extends Shape
{
    /**
     * @param array{
     *     ETag?: string|null,
     *     Key?: string|null,
     *     VersionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

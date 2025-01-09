<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectArn
 * @property string $Key
 * @property string $ETag
 * @property string $Hash
 * @property string $VersionId
 */
class S3ObjectDetail extends Shape
{
    /**
     * @param array{
     *     ObjectArn?: string,
     *     Key?: string,
     *     ETag?: string,
     *     Hash?: string,
     *     VersionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

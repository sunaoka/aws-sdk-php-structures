<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ObjectArn
 * @property string|null $Key
 * @property string|null $ETag
 * @property string|null $Hash
 * @property string|null $VersionId
 */
class S3ObjectDetail extends Shape
{
    /**
     * @param array{
     *     ObjectArn?: string|null,
     *     Key?: string|null,
     *     ETag?: string|null,
     *     Hash?: string|null,
     *     VersionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

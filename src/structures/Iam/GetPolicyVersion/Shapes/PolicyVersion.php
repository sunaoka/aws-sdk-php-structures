<?php

namespace Sunaoka\Aws\Structures\Iam\GetPolicyVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Document
 * @property string|null $VersionId
 * @property bool|null $IsDefaultVersion
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 */
class PolicyVersion extends Shape
{
    /**
     * @param array{
     *     Document?: string|null,
     *     VersionId?: string|null,
     *     IsDefaultVersion?: bool|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

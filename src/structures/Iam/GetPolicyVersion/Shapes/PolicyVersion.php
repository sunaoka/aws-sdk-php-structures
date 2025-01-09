<?php

namespace Sunaoka\Aws\Structures\Iam\GetPolicyVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Document
 * @property string $VersionId
 * @property bool $IsDefaultVersion
 * @property \Aws\Api\DateTimeResult $CreateDate
 */
class PolicyVersion extends Shape
{
    /**
     * @param array{
     *     Document?: string,
     *     VersionId?: string,
     *     IsDefaultVersion?: bool,
     *     CreateDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

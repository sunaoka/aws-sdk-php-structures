<?php

namespace Sunaoka\Aws\Structures\Iot\ListPolicyVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $versionId
 * @property bool $isDefaultVersion
 * @property \Aws\Api\DateTimeResult $createDate
 */
class PolicyVersion extends Shape
{
    /**
     * @param array{
     *     versionId?: string,
     *     isDefaultVersion?: bool,
     *     createDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

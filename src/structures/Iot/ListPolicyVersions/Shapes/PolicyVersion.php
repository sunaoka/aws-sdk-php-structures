<?php

namespace Sunaoka\Aws\Structures\Iot\ListPolicyVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $versionId
 * @property bool|null $isDefaultVersion
 * @property \Aws\Api\DateTimeResult|null $createDate
 */
class PolicyVersion extends Shape
{
    /**
     * @param array{
     *     versionId?: string|null,
     *     isDefaultVersion?: bool|null,
     *     createDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

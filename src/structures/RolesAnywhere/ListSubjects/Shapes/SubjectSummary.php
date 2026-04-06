<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ListSubjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property bool|null $enabled
 * @property \Aws\Api\DateTimeResult|null $lastSeenAt
 * @property string|null $subjectArn
 * @property string|null $subjectId
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $x509Subject
 */
class SubjectSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     enabled?: bool|null,
     *     lastSeenAt?: \Aws\Api\DateTimeResult|null,
     *     subjectArn?: string|null,
     *     subjectId?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     x509Subject?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

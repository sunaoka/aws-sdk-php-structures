<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ListSubjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $subjectArn
 * @property string|null $subjectId
 * @property bool|null $enabled
 * @property string|null $x509Subject
 * @property \Aws\Api\DateTimeResult|null $lastSeenAt
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class SubjectSummary extends Shape
{
    /**
     * @param array{
     *     subjectArn?: string|null,
     *     subjectId?: string|null,
     *     enabled?: bool|null,
     *     x509Subject?: string|null,
     *     lastSeenAt?: \Aws\Api\DateTimeResult|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

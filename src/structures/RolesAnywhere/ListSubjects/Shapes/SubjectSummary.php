<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ListSubjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property bool $enabled
 * @property \Aws\Api\DateTimeResult $lastSeenAt
 * @property string $subjectArn
 * @property string $subjectId
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $x509Subject
 */
class SubjectSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     enabled?: bool,
     *     lastSeenAt?: \Aws\Api\DateTimeResult,
     *     subjectArn?: string,
     *     subjectId?: string,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     x509Subject?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

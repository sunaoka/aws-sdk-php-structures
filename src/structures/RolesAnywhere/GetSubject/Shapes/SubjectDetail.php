<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetSubject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property list<CredentialSummary> $credentials
 * @property bool $enabled
 * @property list<InstanceProperty> $instanceProperties
 * @property \Aws\Api\DateTimeResult $lastSeenAt
 * @property string $subjectArn
 * @property string $subjectId
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $x509Subject
 */
class SubjectDetail extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     credentials?: list<CredentialSummary>,
     *     enabled?: bool,
     *     instanceProperties?: list<InstanceProperty>,
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

<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetSubject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $subjectArn
 * @property string|null $subjectId
 * @property bool|null $enabled
 * @property string|null $x509Subject
 * @property \Aws\Api\DateTimeResult|null $lastSeenAt
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<CredentialSummary>|null $credentials
 * @property list<InstanceProperty>|null $instanceProperties
 */
class SubjectDetail extends Shape
{
    /**
     * @param array{
     *     subjectArn?: string|null,
     *     subjectId?: string|null,
     *     enabled?: bool|null,
     *     x509Subject?: string|null,
     *     lastSeenAt?: \Aws\Api\DateTimeResult|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     credentials?: list<CredentialSummary>|null,
     *     instanceProperties?: list<InstanceProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetSubject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property list<CredentialSummary>|null $credentials
 * @property bool|null $enabled
 * @property list<InstanceProperty>|null $instanceProperties
 * @property \Aws\Api\DateTimeResult|null $lastSeenAt
 * @property string|null $subjectArn
 * @property string|null $subjectId
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $x509Subject
 */
class SubjectDetail extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     credentials?: list<CredentialSummary>|null,
     *     enabled?: bool|null,
     *     instanceProperties?: list<InstanceProperty>|null,
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

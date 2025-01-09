<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplicationTaskAssessmentRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 * @property string $ServiceAccessRoleArn
 * @property string $ResultLocationBucket
 * @property string $ResultLocationFolder
 * @property string $ResultEncryptionMode
 * @property string $ResultKmsKeyArn
 * @property string $AssessmentRunName
 * @property list<string> $IncludeOnly
 * @property list<string> $Exclude
 * @property list<Shapes\Tag> $Tags
 */
class StartReplicationTaskAssessmentRunRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn: string,
     *     ServiceAccessRoleArn: string,
     *     ResultLocationBucket: string,
     *     ResultLocationFolder?: string,
     *     ResultEncryptionMode?: string,
     *     ResultKmsKeyArn?: string,
     *     AssessmentRunName: string,
     *     IncludeOnly?: list<string>,
     *     Exclude?: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

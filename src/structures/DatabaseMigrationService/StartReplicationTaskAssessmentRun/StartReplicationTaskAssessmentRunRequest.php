<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplicationTaskAssessmentRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 * @property string $ServiceAccessRoleArn
 * @property string $ResultLocationBucket
 * @property string|null $ResultLocationFolder
 * @property string|null $ResultEncryptionMode
 * @property string|null $ResultKmsKeyArn
 * @property string $AssessmentRunName
 * @property list<string>|null $IncludeOnly
 * @property list<string>|null $Exclude
 * @property list<Shapes\Tag>|null $Tags
 */
class StartReplicationTaskAssessmentRunRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn: string,
     *     ServiceAccessRoleArn: string,
     *     ResultLocationBucket: string,
     *     ResultLocationFolder?: string|null,
     *     ResultEncryptionMode?: string|null,
     *     ResultKmsKeyArn?: string|null,
     *     AssessmentRunName: string,
     *     IncludeOnly?: list<string>|null,
     *     Exclude?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

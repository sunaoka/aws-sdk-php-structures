<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationTaskAssessmentRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskAssessmentRunArn
 */
class DeleteReplicationTaskAssessmentRunRequest extends Request
{
    /**
     * @param array{ReplicationTaskAssessmentRunArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

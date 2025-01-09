<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CancelReplicationTaskAssessmentRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskAssessmentRunArn
 */
class CancelReplicationTaskAssessmentRunRequest extends Request
{
    /**
     * @param array{ReplicationTaskAssessmentRunArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

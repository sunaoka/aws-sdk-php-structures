<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplicationTaskAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 */
class StartReplicationTaskAssessmentRequest extends Request
{
    /**
     * @param array{ReplicationTaskArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

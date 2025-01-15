<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTaskAssessmentResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Marker
 * @property string|null $BucketName
 * @property list<Shapes\ReplicationTaskAssessmentResult>|null $ReplicationTaskAssessmentResults
 */
class DescribeReplicationTaskAssessmentResultsResponse extends Response
{
}

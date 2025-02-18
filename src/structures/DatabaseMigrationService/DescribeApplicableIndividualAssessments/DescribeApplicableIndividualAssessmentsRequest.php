<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeApplicableIndividualAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReplicationTaskArn
 * @property string|null $ReplicationInstanceArn
 * @property string|null $ReplicationConfigArn
 * @property string|null $SourceEngineName
 * @property string|null $TargetEngineName
 * @property 'full-load'|'cdc'|'full-load-and-cdc'|null $MigrationType
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeApplicableIndividualAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn?: string|null,
     *     ReplicationInstanceArn?: string|null,
     *     ReplicationConfigArn?: string|null,
     *     SourceEngineName?: string|null,
     *     TargetEngineName?: string|null,
     *     MigrationType?: 'full-load'|'cdc'|'full-load-and-cdc'|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

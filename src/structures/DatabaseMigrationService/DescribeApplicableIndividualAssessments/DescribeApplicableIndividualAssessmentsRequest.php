<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeApplicableIndividualAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 * @property string $ReplicationInstanceArn
 * @property string $SourceEngineName
 * @property string $TargetEngineName
 * @property 'full-load'|'cdc'|'full-load-and-cdc' $MigrationType
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeApplicableIndividualAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn?: string,
     *     ReplicationInstanceArn?: string,
     *     SourceEngineName?: string,
     *     TargetEngineName?: string,
     *     MigrationType?: 'full-load'|'cdc'|'full-load-and-cdc',
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceType
 * @property Option|null $Connection
 * @property string|null $Schema
 * @property string|null $Table
 * @property string|null $Database
 * @property string|null $TempDir
 * @property Option|null $IamRole
 * @property array<string, string>|null $AdditionalOptions
 * @property string|null $SampleQuery
 * @property string|null $PreAction
 * @property string|null $PostAction
 * @property string|null $Action
 * @property bool|null $Upsert
 * @property string|null $MergeAction
 * @property string|null $MergeWhenMatched
 * @property string|null $MergeWhenNotMatched
 * @property string|null $MergeClause
 * @property string|null $StagingTable
 * @property list<Option>|null $SelectedColumns
 * @property bool|null $AutoPushdown
 * @property list<Option>|null $TableSchema
 */
class SnowflakeNodeData extends Shape
{
    /**
     * @param array{
     *     SourceType?: string|null,
     *     Connection?: Option|null,
     *     Schema?: string|null,
     *     Table?: string|null,
     *     Database?: string|null,
     *     TempDir?: string|null,
     *     IamRole?: Option|null,
     *     AdditionalOptions?: array<string, string>|null,
     *     SampleQuery?: string|null,
     *     PreAction?: string|null,
     *     PostAction?: string|null,
     *     Action?: string|null,
     *     Upsert?: bool|null,
     *     MergeAction?: string|null,
     *     MergeWhenMatched?: string|null,
     *     MergeWhenNotMatched?: string|null,
     *     MergeClause?: string|null,
     *     StagingTable?: string|null,
     *     SelectedColumns?: list<Option>|null,
     *     AutoPushdown?: bool|null,
     *     TableSchema?: list<Option>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

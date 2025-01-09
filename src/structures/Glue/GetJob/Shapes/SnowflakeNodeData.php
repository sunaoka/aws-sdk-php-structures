<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceType
 * @property Option $Connection
 * @property string $Schema
 * @property string $Table
 * @property string $Database
 * @property string $TempDir
 * @property Option $IamRole
 * @property array<string, string> $AdditionalOptions
 * @property string $SampleQuery
 * @property string $PreAction
 * @property string $PostAction
 * @property string $Action
 * @property bool $Upsert
 * @property string $MergeAction
 * @property string $MergeWhenMatched
 * @property string $MergeWhenNotMatched
 * @property string $MergeClause
 * @property string $StagingTable
 * @property list<Option> $SelectedColumns
 * @property bool $AutoPushdown
 * @property list<Option> $TableSchema
 */
class SnowflakeNodeData extends Shape
{
    /**
     * @param array{
     *     SourceType?: string,
     *     Connection?: Option,
     *     Schema?: string,
     *     Table?: string,
     *     Database?: string,
     *     TempDir?: string,
     *     IamRole?: Option,
     *     AdditionalOptions?: array<string, string>,
     *     SampleQuery?: string,
     *     PreAction?: string,
     *     PostAction?: string,
     *     Action?: string,
     *     Upsert?: bool,
     *     MergeAction?: string,
     *     MergeWhenMatched?: string,
     *     MergeWhenNotMatched?: string,
     *     MergeClause?: string,
     *     StagingTable?: string,
     *     SelectedColumns?: list<Option>,
     *     AutoPushdown?: bool,
     *     TableSchema?: list<Option>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessType
 * @property string|null $SourceType
 * @property Option|null $Connection
 * @property Option|null $Schema
 * @property Option|null $Table
 * @property Option|null $CatalogDatabase
 * @property Option|null $CatalogTable
 * @property string|null $CatalogRedshiftSchema
 * @property string|null $CatalogRedshiftTable
 * @property string|null $TempDir
 * @property Option|null $IamRole
 * @property list<AmazonRedshiftAdvancedOption>|null $AdvancedOptions
 * @property string|null $SampleQuery
 * @property string|null $PreAction
 * @property string|null $PostAction
 * @property string|null $Action
 * @property string|null $TablePrefix
 * @property bool|null $Upsert
 * @property string|null $MergeAction
 * @property string|null $MergeWhenMatched
 * @property string|null $MergeWhenNotMatched
 * @property string|null $MergeClause
 * @property string|null $CrawlerConnection
 * @property list<Option>|null $TableSchema
 * @property string|null $StagingTable
 * @property list<Option>|null $SelectedColumns
 */
class AmazonRedshiftNodeData extends Shape
{
    /**
     * @param array{
     *     AccessType?: string|null,
     *     SourceType?: string|null,
     *     Connection?: Option|null,
     *     Schema?: Option|null,
     *     Table?: Option|null,
     *     CatalogDatabase?: Option|null,
     *     CatalogTable?: Option|null,
     *     CatalogRedshiftSchema?: string|null,
     *     CatalogRedshiftTable?: string|null,
     *     TempDir?: string|null,
     *     IamRole?: Option|null,
     *     AdvancedOptions?: list<AmazonRedshiftAdvancedOption>|null,
     *     SampleQuery?: string|null,
     *     PreAction?: string|null,
     *     PostAction?: string|null,
     *     Action?: string|null,
     *     TablePrefix?: string|null,
     *     Upsert?: bool|null,
     *     MergeAction?: string|null,
     *     MergeWhenMatched?: string|null,
     *     MergeWhenNotMatched?: string|null,
     *     MergeClause?: string|null,
     *     CrawlerConnection?: string|null,
     *     TableSchema?: list<Option>|null,
     *     StagingTable?: string|null,
     *     SelectedColumns?: list<Option>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

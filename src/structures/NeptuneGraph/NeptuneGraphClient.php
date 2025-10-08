<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph;

class NeptuneGraphClient extends \Aws\NeptuneGraph\NeptuneGraphClient
{
    use CancelExportTask\CancelExportTaskTrait;
    use CancelImportTask\CancelImportTaskTrait;
    use CancelQuery\CancelQueryTrait;
    use CreateGraph\CreateGraphTrait;
    use CreateGraphSnapshot\CreateGraphSnapshotTrait;
    use CreateGraphUsingImportTask\CreateGraphUsingImportTaskTrait;
    use CreatePrivateGraphEndpoint\CreatePrivateGraphEndpointTrait;
    use DeleteGraph\DeleteGraphTrait;
    use DeleteGraphSnapshot\DeleteGraphSnapshotTrait;
    use DeletePrivateGraphEndpoint\DeletePrivateGraphEndpointTrait;
    use ExecuteQuery\ExecuteQueryTrait;
    use GetExportTask\GetExportTaskTrait;
    use GetGraph\GetGraphTrait;
    use GetGraphSnapshot\GetGraphSnapshotTrait;
    use GetGraphSummary\GetGraphSummaryTrait;
    use GetImportTask\GetImportTaskTrait;
    use GetPrivateGraphEndpoint\GetPrivateGraphEndpointTrait;
    use GetQuery\GetQueryTrait;
    use ListExportTasks\ListExportTasksTrait;
    use ListGraphSnapshots\ListGraphSnapshotsTrait;
    use ListGraphs\ListGraphsTrait;
    use ListImportTasks\ListImportTasksTrait;
    use ListPrivateGraphEndpoints\ListPrivateGraphEndpointsTrait;
    use ListQueries\ListQueriesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ResetGraph\ResetGraphTrait;
    use RestoreGraphFromSnapshot\RestoreGraphFromSnapshotTrait;
    use StartExportTask\StartExportTaskTrait;
    use StartGraph\StartGraphTrait;
    use StartImportTask\StartImportTaskTrait;
    use StopGraph\StopGraphTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateGraph\UpdateGraphTrait;
}

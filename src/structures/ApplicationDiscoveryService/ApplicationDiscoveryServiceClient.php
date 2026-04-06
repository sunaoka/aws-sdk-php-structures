<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService;

class ApplicationDiscoveryServiceClient extends \Aws\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient
{
    use AssociateConfigurationItemsToApplication\AssociateConfigurationItemsToApplicationTrait;
    use BatchDeleteAgents\BatchDeleteAgentsTrait;
    use BatchDeleteImportData\BatchDeleteImportDataTrait;
    use CreateApplication\CreateApplicationTrait;
    use CreateTags\CreateTagsTrait;
    use DeleteApplications\DeleteApplicationsTrait;
    use DeleteTags\DeleteTagsTrait;
    use DescribeAgents\DescribeAgentsTrait;
    use DescribeBatchDeleteConfigurationTask\DescribeBatchDeleteConfigurationTaskTrait;
    use DescribeConfigurations\DescribeConfigurationsTrait;
    use DescribeContinuousExports\DescribeContinuousExportsTrait;
    use DescribeExportConfigurations\DescribeExportConfigurationsTrait;
    use DescribeExportTasks\DescribeExportTasksTrait;
    use DescribeImportTasks\DescribeImportTasksTrait;
    use DescribeTags\DescribeTagsTrait;
    use DisassociateConfigurationItemsFromApplication\DisassociateConfigurationItemsFromApplicationTrait;
    use ExportConfigurations\ExportConfigurationsTrait;
    use GetDiscoverySummary\GetDiscoverySummaryTrait;
    use ListConfigurations\ListConfigurationsTrait;
    use ListServerNeighbors\ListServerNeighborsTrait;
    use StartBatchDeleteConfigurationTask\StartBatchDeleteConfigurationTaskTrait;
    use StartContinuousExport\StartContinuousExportTrait;
    use StartDataCollectionByAgentIds\StartDataCollectionByAgentIdsTrait;
    use StartExportTask\StartExportTaskTrait;
    use StartImportTask\StartImportTaskTrait;
    use StopContinuousExport\StopContinuousExportTrait;
    use StopDataCollectionByAgentIds\StopDataCollectionByAgentIdsTrait;
    use UpdateApplication\UpdateApplicationTrait;
}

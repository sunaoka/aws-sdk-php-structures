<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite;

class TimestreamWriteClient extends \Aws\TimestreamWrite\TimestreamWriteClient
{
    use CreateBatchLoadTask\CreateBatchLoadTaskTrait;
    use CreateDatabase\CreateDatabaseTrait;
    use CreateTable\CreateTableTrait;
    use DeleteDatabase\DeleteDatabaseTrait;
    use DeleteTable\DeleteTableTrait;
    use DescribeBatchLoadTask\DescribeBatchLoadTaskTrait;
    use DescribeDatabase\DescribeDatabaseTrait;
    use DescribeEndpoints\DescribeEndpointsTrait;
    use DescribeTable\DescribeTableTrait;
    use ListBatchLoadTasks\ListBatchLoadTasksTrait;
    use ListDatabases\ListDatabasesTrait;
    use ListTables\ListTablesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ResumeBatchLoadTask\ResumeBatchLoadTaskTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDatabase\UpdateDatabaseTrait;
    use UpdateTable\UpdateTableTrait;
    use WriteRecords\WriteRecordsTrait;
}

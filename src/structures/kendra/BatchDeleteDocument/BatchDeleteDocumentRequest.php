<?php

namespace Sunaoka\Aws\Structures\kendra\BatchDeleteDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property list<string> $DocumentIdList
 * @property Shapes\DataSourceSyncJobMetricTarget $DataSourceSyncJobMetricTarget
 */
class BatchDeleteDocumentRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     DocumentIdList: list<string>,
     *     DataSourceSyncJobMetricTarget?: Shapes\DataSourceSyncJobMetricTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

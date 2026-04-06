<?php

namespace Sunaoka\Aws\Structures\QBusiness\StartDataSourceSyncJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property string $applicationId
 * @property string $indexId
 */
class StartDataSourceSyncJobRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     applicationId: string,
     *     indexId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

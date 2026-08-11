<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateMetricMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $MetricId
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateMetricMetadataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MetricId: string,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeComputationModelExecutionSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $computationModelId
 * @property 'ASSET'|null $resolveToResourceType
 * @property string|null $resolveToResourceId
 */
class DescribeComputationModelExecutionSummaryRequest extends Request
{
    /**
     * @param array{
     *     computationModelId: string,
     *     resolveToResourceType?: 'ASSET'|null,
     *     resolveToResourceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

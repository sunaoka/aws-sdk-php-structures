<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeComputationModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $computationModelId
 * @property string|null $computationModelVersion
 */
class DescribeComputationModelRequest extends Request
{
    /**
     * @param array{
     *     computationModelId: string,
     *     computationModelVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListStageDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<min, 100> $MaxResults
 * @property string $EdgeDeploymentPlanName
 * @property bool $ExcludeDevicesDeployedInOtherStage
 * @property string $StageName
 */
class ListStageDevicesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<min, 100>,
     *     EdgeDeploymentPlanName: string,
     *     ExcludeDevicesDeployedInOtherStage?: bool,
     *     StageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListStageDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<min, 100>|null $MaxResults
 * @property string $EdgeDeploymentPlanName
 * @property bool|null $ExcludeDevicesDeployedInOtherStage
 * @property string $StageName
 */
class ListStageDevicesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<min, 100>|null,
     *     EdgeDeploymentPlanName: string,
     *     ExcludeDevicesDeployedInOtherStage?: bool|null,
     *     StageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

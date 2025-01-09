<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartTrainedModelExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $trainedModelArn
 * @property string $membershipIdentifier
 * @property Shapes\TrainedModelExportOutputConfiguration $outputConfiguration
 * @property string $description
 */
class StartTrainedModelExportJobRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     trainedModelArn: string,
     *     membershipIdentifier: string,
     *     outputConfiguration: Shapes\TrainedModelExportOutputConfiguration,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

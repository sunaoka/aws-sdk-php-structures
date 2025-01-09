<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ExportEarthObservationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $ClientToken
 * @property string $ExecutionRoleArn
 * @property bool $ExportSourceImages
 * @property Shapes\OutputConfigInput $OutputConfig
 */
class ExportEarthObservationJobRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     ClientToken?: string,
     *     ExecutionRoleArn: string,
     *     ExportSourceImages?: bool,
     *     OutputConfig: Shapes\OutputConfigInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

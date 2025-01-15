<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ExportEarthObservationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $ClientToken
 * @property string $ExecutionRoleArn
 * @property bool|null $ExportSourceImages
 * @property Shapes\OutputConfigInput $OutputConfig
 */
class ExportEarthObservationJobRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     ClientToken?: string|null,
     *     ExecutionRoleArn: string,
     *     ExportSourceImages?: bool|null,
     *     OutputConfig: Shapes\OutputConfigInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

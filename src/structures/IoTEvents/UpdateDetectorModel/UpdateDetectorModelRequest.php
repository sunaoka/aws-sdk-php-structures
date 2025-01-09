<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateDetectorModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorModelName
 * @property Shapes\DetectorModelDefinition $detectorModelDefinition
 * @property string $detectorModelDescription
 * @property string $roleArn
 * @property 'BATCH'|'SERIAL' $evaluationMethod
 */
class UpdateDetectorModelRequest extends Request
{
    /**
     * @param array{
     *     detectorModelName: string,
     *     detectorModelDefinition: Shapes\DetectorModelDefinition,
     *     detectorModelDescription?: string,
     *     roleArn: string,
     *     evaluationMethod?: 'BATCH'|'SERIAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

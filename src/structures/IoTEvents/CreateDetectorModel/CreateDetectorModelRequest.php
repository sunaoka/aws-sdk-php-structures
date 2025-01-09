<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorModelName
 * @property Shapes\DetectorModelDefinition $detectorModelDefinition
 * @property string $detectorModelDescription
 * @property string $key
 * @property string $roleArn
 * @property list<Shapes\Tag> $tags
 * @property 'BATCH'|'SERIAL' $evaluationMethod
 */
class CreateDetectorModelRequest extends Request
{
    /**
     * @param array{
     *     detectorModelName: string,
     *     detectorModelDefinition: Shapes\DetectorModelDefinition,
     *     detectorModelDescription?: string,
     *     key?: string,
     *     roleArn: string,
     *     tags?: list<Shapes\Tag>,
     *     evaluationMethod?: 'BATCH'|'SERIAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

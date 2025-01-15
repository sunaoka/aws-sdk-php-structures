<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorModelName
 * @property Shapes\DetectorModelDefinition $detectorModelDefinition
 * @property string|null $detectorModelDescription
 * @property string|null $key
 * @property string $roleArn
 * @property list<Shapes\Tag>|null $tags
 * @property 'BATCH'|'SERIAL'|null $evaluationMethod
 */
class CreateDetectorModelRequest extends Request
{
    /**
     * @param array{
     *     detectorModelName: string,
     *     detectorModelDefinition: Shapes\DetectorModelDefinition,
     *     detectorModelDescription?: string|null,
     *     key?: string|null,
     *     roleArn: string,
     *     tags?: list<Shapes\Tag>|null,
     *     evaluationMethod?: 'BATCH'|'SERIAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

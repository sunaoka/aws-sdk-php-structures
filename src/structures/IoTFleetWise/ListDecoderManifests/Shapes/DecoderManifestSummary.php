<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $modelManifestArn
 * @property string $description
 * @property 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 * @property string $message
 */
class DecoderManifestSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     modelManifestArn?: string,
     *     description?: string,
     *     status?: 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModificationTime: \Aws\Api\DateTimeResult,
     *     message?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

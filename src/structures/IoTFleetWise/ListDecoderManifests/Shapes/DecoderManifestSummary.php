<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $modelManifestArn
 * @property string|null $description
 * @property 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING'|null $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 * @property string|null $message
 */
class DecoderManifestSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     modelManifestArn?: string|null,
     *     description?: string|null,
     *     status?: 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING'|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModificationTime: \Aws\Api\DateTimeResult,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location $s3Location
 * @property 'S3' $type
 */
class SupplementalDataStorageLocation extends Shape
{
    /**
     * @param array{
     *     s3Location?: S3Location,
     *     type: 'S3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

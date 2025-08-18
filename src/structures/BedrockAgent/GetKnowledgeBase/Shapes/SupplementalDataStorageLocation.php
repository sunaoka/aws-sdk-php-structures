<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3' $type
 * @property S3Location|null $s3Location
 */
class SupplementalDataStorageLocation extends Shape
{
    /**
     * @param array{
     *     type: 'S3',
     *     s3Location?: S3Location|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

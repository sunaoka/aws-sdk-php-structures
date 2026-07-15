<?php

namespace Sunaoka\Aws\Structures\HealthLake\StartDataTransformationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property 'CCDA'|'CSV'|null $SourceFormat
 */
class TransformationInputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     SourceFormat?: 'CCDA'|'CSV'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

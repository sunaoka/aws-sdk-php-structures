<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property int $conditionLanguageVersion
 */
class DataPartitionUploadOptions extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     conditionLanguageVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property int<1, 1> $conditionLanguageVersion
 */
class DataPartitionUploadOptions extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     conditionLanguageVersion?: int<1, 1>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

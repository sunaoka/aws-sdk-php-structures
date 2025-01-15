<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property int<1, 1>|null $conditionLanguageVersion
 */
class DataPartitionUploadOptions extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     conditionLanguageVersion?: int<1, 1>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

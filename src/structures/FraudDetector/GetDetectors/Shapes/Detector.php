<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detectorId
 * @property string $description
 * @property string $eventTypeName
 * @property string $lastUpdatedTime
 * @property string $createdTime
 * @property string $arn
 */
class Detector extends Shape
{
    /**
     * @param array{
     *     detectorId?: string,
     *     description?: string,
     *     eventTypeName?: string,
     *     lastUpdatedTime?: string,
     *     createdTime?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

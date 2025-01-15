<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $detectorId
 * @property string|null $description
 * @property string|null $eventTypeName
 * @property string|null $lastUpdatedTime
 * @property string|null $createdTime
 * @property string|null $arn
 */
class Detector extends Shape
{
    /**
     * @param array{
     *     detectorId?: string|null,
     *     description?: string|null,
     *     eventTypeName?: string|null,
     *     lastUpdatedTime?: string|null,
     *     createdTime?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

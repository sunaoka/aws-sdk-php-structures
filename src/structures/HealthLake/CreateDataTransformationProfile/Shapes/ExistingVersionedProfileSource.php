<?php

namespace Sunaoka\Aws\Structures\HealthLake\CreateDataTransformationProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileId
 * @property int $Version
 */
class ExistingVersionedProfileSource extends Shape
{
    /**
     * @param array{
     *     ProfileId: string,
     *     Version: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

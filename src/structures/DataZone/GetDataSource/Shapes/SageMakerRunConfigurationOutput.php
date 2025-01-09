<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $region
 * @property array<string, list<string>> $trackingAssets
 */
class SageMakerRunConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     region?: string,
     *     trackingAssets: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

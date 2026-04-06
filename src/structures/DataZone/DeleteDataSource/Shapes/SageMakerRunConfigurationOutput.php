<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $region
 * @property array<string, list<string>> $trackingAssets
 */
class SageMakerRunConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     region?: string|null,
     *     trackingAssets: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

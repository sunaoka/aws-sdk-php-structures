<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PackagingConfigurationId
 * @property string $Status
 * @property string $Url
 */
class EgressEndpoint extends Shape
{
    /**
     * @param array{
     *     PackagingConfigurationId?: string,
     *     Status?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

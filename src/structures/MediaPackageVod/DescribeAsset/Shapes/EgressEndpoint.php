<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribeAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PackagingConfigurationId
 * @property string|null $Status
 * @property string|null $Url
 */
class EgressEndpoint extends Shape
{
    /**
     * @param array{
     *     PackagingConfigurationId?: string|null,
     *     Status?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

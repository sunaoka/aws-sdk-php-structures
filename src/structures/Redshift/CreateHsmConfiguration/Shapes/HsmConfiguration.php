<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateHsmConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HsmConfigurationIdentifier
 * @property string|null $Description
 * @property string|null $HsmIpAddress
 * @property string|null $HsmPartitionName
 * @property list<Tag>|null $Tags
 */
class HsmConfiguration extends Shape
{
    /**
     * @param array{
     *     HsmConfigurationIdentifier?: string|null,
     *     Description?: string|null,
     *     HsmIpAddress?: string|null,
     *     HsmPartitionName?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

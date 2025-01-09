<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateHsmConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HsmConfigurationIdentifier
 * @property string $Description
 * @property string $HsmIpAddress
 * @property string $HsmPartitionName
 * @property list<Tag> $Tags
 */
class HsmConfiguration extends Shape
{
    /**
     * @param array{
     *     HsmConfigurationIdentifier?: string,
     *     Description?: string,
     *     HsmIpAddress?: string,
     *     HsmPartitionName?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

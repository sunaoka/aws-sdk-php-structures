<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcConfigurationId
 * @property list<string>|null $SubnetIdUpdates
 * @property list<string>|null $SecurityGroupIdUpdates
 */
class VpcConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     VpcConfigurationId: string,
     *     SubnetIdUpdates?: list<string>|null,
     *     SecurityGroupIdUpdates?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

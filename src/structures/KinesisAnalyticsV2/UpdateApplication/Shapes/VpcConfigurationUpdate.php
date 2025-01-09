<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcConfigurationId
 * @property list<string> $SubnetIdUpdates
 * @property list<string> $SecurityGroupIdUpdates
 */
class VpcConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     VpcConfigurationId: string,
     *     SubnetIdUpdates?: list<string>,
     *     SecurityGroupIdUpdates?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

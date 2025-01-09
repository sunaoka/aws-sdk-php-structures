<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\RollbackApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcConfigurationId
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 */
class VpcConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     VpcConfigurationId: string,
     *     VpcId: string,
     *     SubnetIds: list<string>,
     *     SecurityGroupIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

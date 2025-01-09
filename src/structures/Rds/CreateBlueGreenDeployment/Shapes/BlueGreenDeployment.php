<?php

namespace Sunaoka\Aws\Structures\Rds\CreateBlueGreenDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BlueGreenDeploymentIdentifier
 * @property string $BlueGreenDeploymentName
 * @property string $Source
 * @property string $Target
 * @property list<SwitchoverDetail> $SwitchoverDetails
 * @property list<BlueGreenDeploymentTask> $Tasks
 * @property string $Status
 * @property string $StatusDetails
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $DeleteTime
 * @property list<Tag> $TagList
 */
class BlueGreenDeployment extends Shape
{
    /**
     * @param array{
     *     BlueGreenDeploymentIdentifier?: string,
     *     BlueGreenDeploymentName?: string,
     *     Source?: string,
     *     Target?: string,
     *     SwitchoverDetails?: list<SwitchoverDetail>,
     *     Tasks?: list<BlueGreenDeploymentTask>,
     *     Status?: string,
     *     StatusDetails?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     DeleteTime?: \Aws\Api\DateTimeResult,
     *     TagList?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

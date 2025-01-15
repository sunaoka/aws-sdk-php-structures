<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteBlueGreenDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BlueGreenDeploymentIdentifier
 * @property string|null $BlueGreenDeploymentName
 * @property string|null $Source
 * @property string|null $Target
 * @property list<SwitchoverDetail>|null $SwitchoverDetails
 * @property list<BlueGreenDeploymentTask>|null $Tasks
 * @property string|null $Status
 * @property string|null $StatusDetails
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $DeleteTime
 * @property list<Tag>|null $TagList
 */
class BlueGreenDeployment extends Shape
{
    /**
     * @param array{
     *     BlueGreenDeploymentIdentifier?: string|null,
     *     BlueGreenDeploymentName?: string|null,
     *     Source?: string|null,
     *     Target?: string|null,
     *     SwitchoverDetails?: list<SwitchoverDetail>|null,
     *     Tasks?: list<BlueGreenDeploymentTask>|null,
     *     Status?: string|null,
     *     StatusDetails?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     DeleteTime?: \Aws\Api\DateTimeResult|null,
     *     TagList?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

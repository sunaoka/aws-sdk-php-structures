<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $name
 * @property int $defaultJobTimeoutMinutes
 * @property Shapes\VpcConfig $vpcConfig
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string,
     *     defaultJobTimeoutMinutes?: int,
     *     vpcConfig?: Shapes\VpcConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

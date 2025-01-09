<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int $defaultJobTimeoutMinutes
 * @property Shapes\VpcConfig $vpcConfig
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     defaultJobTimeoutMinutes?: int,
     *     vpcConfig?: Shapes\VpcConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

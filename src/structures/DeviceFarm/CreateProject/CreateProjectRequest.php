<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int|null $defaultJobTimeoutMinutes
 * @property Shapes\VpcConfig|null $vpcConfig
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     defaultJobTimeoutMinutes?: int|null,
     *     vpcConfig?: Shapes\VpcConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property int|null $defaultJobTimeoutMinutes
 * @property Shapes\VpcConfig|null $vpcConfig
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     defaultJobTimeoutMinutes?: int|null,
     *     vpcConfig?: Shapes\VpcConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

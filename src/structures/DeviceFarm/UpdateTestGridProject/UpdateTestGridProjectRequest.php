<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateTestGridProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property string $name
 * @property string $description
 * @property Shapes\TestGridVpcConfig $vpcConfig
 */
class UpdateTestGridProjectRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     name?: string,
     *     description?: string,
     *     vpcConfig?: Shapes\TestGridVpcConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

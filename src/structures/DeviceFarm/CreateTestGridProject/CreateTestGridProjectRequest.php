<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateTestGridProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property Shapes\TestGridVpcConfig $vpcConfig
 */
class CreateTestGridProjectRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     vpcConfig?: Shapes\TestGridVpcConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

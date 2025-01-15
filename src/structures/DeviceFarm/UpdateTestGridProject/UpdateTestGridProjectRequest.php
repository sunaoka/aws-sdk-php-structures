<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateTestGridProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\TestGridVpcConfig|null $vpcConfig
 */
class UpdateTestGridProjectRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     name?: string|null,
     *     description?: string|null,
     *     vpcConfig?: Shapes\TestGridVpcConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

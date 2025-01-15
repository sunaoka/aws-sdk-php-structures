<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateTestGridProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\TestGridVpcConfig|null $vpcConfig
 */
class CreateTestGridProjectRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     vpcConfig?: Shapes\TestGridVpcConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

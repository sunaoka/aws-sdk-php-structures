<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductAsAdmin;

trait DescribeProductAsAdminTrait
{
    /**
     * @param DescribeProductAsAdminRequest $args
     * @return DescribeProductAsAdminResponse
     */
    public function describeProductAsAdmin(DescribeProductAsAdminRequest $args)
    {
        $result = parent::describeProductAsAdmin($args->toArray());
        return new DescribeProductAsAdminResponse($result->toArray());
    }
}

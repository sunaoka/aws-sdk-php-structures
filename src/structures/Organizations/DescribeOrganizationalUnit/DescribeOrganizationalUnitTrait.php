<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeOrganizationalUnit;

trait DescribeOrganizationalUnitTrait
{
    /**
     * @param DescribeOrganizationalUnitRequest $args
     * @return DescribeOrganizationalUnitResponse
     */
    public function describeOrganizationalUnit(DescribeOrganizationalUnitRequest $args)
    {
        $result = parent::describeOrganizationalUnit($args->toArray());
        return new DescribeOrganizationalUnitResponse($result->toArray());
    }
}

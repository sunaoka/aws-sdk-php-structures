<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorEntity;

trait DescribeConnectorEntityTrait
{
    /**
     * @param DescribeConnectorEntityRequest $args
     * @return DescribeConnectorEntityResponse
     */
    public function describeConnectorEntity(DescribeConnectorEntityRequest $args)
    {
        $result = parent::describeConnectorEntity($args->toArray());
        return new DescribeConnectorEntityResponse($result->toArray());
    }
}

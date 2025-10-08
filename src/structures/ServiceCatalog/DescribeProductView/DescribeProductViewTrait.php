<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductView;

trait DescribeProductViewTrait
{
    /**
     * @param DescribeProductViewRequest $args
     * @return DescribeProductViewResponse
     */
    public function describeProductView(DescribeProductViewRequest $args)
    {
        $result = parent::describeProductView($args->toArray());
        return new DescribeProductViewResponse($result->toArray());
    }
}

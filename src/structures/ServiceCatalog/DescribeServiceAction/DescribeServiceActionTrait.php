<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeServiceAction;

trait DescribeServiceActionTrait
{
    /**
     * @param DescribeServiceActionRequest $args
     * @return DescribeServiceActionResponse
     */
    public function describeServiceAction(DescribeServiceActionRequest $args)
    {
        $result = parent::describeServiceAction($args->toArray());
        return new DescribeServiceActionResponse($result->toArray());
    }
}

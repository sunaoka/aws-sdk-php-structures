<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeNamespace;

trait DescribeNamespaceTrait
{
    /**
     * @param DescribeNamespaceRequest $args
     * @return DescribeNamespaceResponse
     */
    public function describeNamespace(DescribeNamespaceRequest $args)
    {
        $result = parent::describeNamespace($args->toArray());
        return new DescribeNamespaceResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxOntap;

trait DescribeLocationFsxOntapTrait
{
    /**
     * @param DescribeLocationFsxOntapRequest $args
     * @return DescribeLocationFsxOntapResponse
     */
    public function describeLocationFsxOntap(DescribeLocationFsxOntapRequest $args)
    {
        $result = parent::describeLocationFsxOntap($args->toArray());
        return new DescribeLocationFsxOntapResponse($result->toArray());
    }
}

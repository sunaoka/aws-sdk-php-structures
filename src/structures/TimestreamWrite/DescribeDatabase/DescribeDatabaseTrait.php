<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeDatabase;

trait DescribeDatabaseTrait
{
    /**
     * @param DescribeDatabaseRequest $args
     * @return DescribeDatabaseResponse
     */
    public function describeDatabase(DescribeDatabaseRequest $args)
    {
        $result = parent::describeDatabase($args->toArray());
        return new DescribeDatabaseResponse($result->toArray());
    }
}

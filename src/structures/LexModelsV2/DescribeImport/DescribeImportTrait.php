<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeImport;

trait DescribeImportTrait
{
    /**
     * @param DescribeImportRequest $args
     * @return DescribeImportResponse
     */
    public function describeImport(DescribeImportRequest $args)
    {
        $result = parent::describeImport($args->toArray());
        return new DescribeImportResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\DynamoDb\Scan;

trait ScanTrait
{
    /**
     * @param ScanRequest $args
     * @return ScanResponse
     */
    public function scan(ScanRequest $args)
    {
        $result = parent::scan($args->toArray());
        return new ScanResponse($result->toArray());
    }
}

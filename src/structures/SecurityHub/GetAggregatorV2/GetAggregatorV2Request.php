<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetAggregatorV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AggregatorV2Arn
 */
class GetAggregatorV2Request extends Request
{
    /**
     * @param array{AggregatorV2Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

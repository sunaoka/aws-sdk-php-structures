<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteAggregatorV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AggregatorV2Arn
 */
class DeleteAggregatorV2Request extends Request
{
    /**
     * @param array{AggregatorV2Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

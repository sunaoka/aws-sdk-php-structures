<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingAggregator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FindingAggregatorArn
 */
class GetFindingAggregatorRequest extends Request
{
    /**
     * @param array{FindingAggregatorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

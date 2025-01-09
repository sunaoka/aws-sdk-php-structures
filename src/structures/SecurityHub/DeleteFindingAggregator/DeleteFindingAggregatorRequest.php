<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteFindingAggregator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FindingAggregatorArn
 */
class DeleteFindingAggregatorRequest extends Request
{
    /**
     * @param array{FindingAggregatorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

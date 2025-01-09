<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteInsight;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightArn
 */
class DeleteInsightRequest extends Request
{
    /**
     * @param array{InsightArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

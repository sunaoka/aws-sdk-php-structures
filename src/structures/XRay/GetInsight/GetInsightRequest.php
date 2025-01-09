<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsight;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightId
 */
class GetInsightRequest extends Request
{
    /**
     * @param array{InsightId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

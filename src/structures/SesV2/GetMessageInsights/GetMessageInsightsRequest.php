<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MessageId
 */
class GetMessageInsightsRequest extends Request
{
    /**
     * @param array{MessageId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

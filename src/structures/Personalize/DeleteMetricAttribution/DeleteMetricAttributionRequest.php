<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteMetricAttribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricAttributionArn
 */
class DeleteMetricAttributionRequest extends Request
{
    /**
     * @param array{metricAttributionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

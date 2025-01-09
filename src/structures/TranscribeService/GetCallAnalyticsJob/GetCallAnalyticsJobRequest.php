<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetCallAnalyticsJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallAnalyticsJobName
 */
class GetCallAnalyticsJobRequest extends Request
{
    /**
     * @param array{CallAnalyticsJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

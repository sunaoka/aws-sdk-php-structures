<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteCallAnalyticsJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallAnalyticsJobName
 */
class DeleteCallAnalyticsJobRequest extends Request
{
    /**
     * @param array{CallAnalyticsJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

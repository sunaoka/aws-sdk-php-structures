<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetCallAnalyticsCategory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CategoryName
 */
class GetCallAnalyticsCategoryRequest extends Request
{
    /**
     * @param array{CategoryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

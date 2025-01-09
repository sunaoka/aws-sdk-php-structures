<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteCallAnalyticsCategory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CategoryName
 */
class DeleteCallAnalyticsCategoryRequest extends Request
{
    /**
     * @param array{CategoryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

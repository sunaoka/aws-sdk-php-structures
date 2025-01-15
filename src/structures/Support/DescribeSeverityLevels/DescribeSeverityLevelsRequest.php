<?php

namespace Sunaoka\Aws\Structures\Support\DescribeSeverityLevels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $language
 */
class DescribeSeverityLevelsRequest extends Request
{
    /**
     * @param array{language?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

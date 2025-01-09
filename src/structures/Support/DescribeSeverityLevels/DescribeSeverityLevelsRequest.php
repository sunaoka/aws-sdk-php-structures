<?php

namespace Sunaoka\Aws\Structures\Support\DescribeSeverityLevels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $language
 */
class DescribeSeverityLevelsRequest extends Request
{
    /**
     * @param array{language?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

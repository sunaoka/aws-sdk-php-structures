<?php

namespace Sunaoka\Aws\Structures\Support\DescribeSeverityLevels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $language
 * @property bool|null $dryRun
 */
class DescribeSeverityLevelsRequest extends Request
{
    /**
     * @param array{
     *     language?: string|null,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

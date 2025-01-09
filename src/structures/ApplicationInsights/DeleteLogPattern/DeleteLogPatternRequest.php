<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DeleteLogPattern;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $PatternSetName
 * @property string $PatternName
 */
class DeleteLogPatternRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     PatternSetName: string,
     *     PatternName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateLogPattern;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $PatternSetName
 * @property string $PatternName
 * @property string $Pattern
 * @property int $Rank
 */
class UpdateLogPatternRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     PatternSetName: string,
     *     PatternName: string,
     *     Pattern?: string,
     *     Rank?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

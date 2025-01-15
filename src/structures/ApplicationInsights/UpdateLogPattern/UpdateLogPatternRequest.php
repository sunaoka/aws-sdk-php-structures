<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateLogPattern;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $PatternSetName
 * @property string $PatternName
 * @property string|null $Pattern
 * @property int|null $Rank
 */
class UpdateLogPatternRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     PatternSetName: string,
     *     PatternName: string,
     *     Pattern?: string|null,
     *     Rank?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

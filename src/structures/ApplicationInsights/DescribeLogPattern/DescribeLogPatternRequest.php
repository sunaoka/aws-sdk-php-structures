<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeLogPattern;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $PatternSetName
 * @property string $PatternName
 * @property string $AccountId
 */
class DescribeLogPatternRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     PatternSetName: string,
     *     PatternName: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

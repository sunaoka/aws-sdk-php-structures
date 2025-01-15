<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Keyword
 * @property list<string>|null $Settings
 */
class RuleOption extends Shape
{
    /**
     * @param array{
     *     Keyword?: string|null,
     *     Settings?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

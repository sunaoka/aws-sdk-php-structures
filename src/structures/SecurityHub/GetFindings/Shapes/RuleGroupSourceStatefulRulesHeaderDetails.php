<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Destination
 * @property string $DestinationPort
 * @property string $Direction
 * @property string $Protocol
 * @property string $Source
 * @property string $SourcePort
 */
class RuleGroupSourceStatefulRulesHeaderDetails extends Shape
{
    /**
     * @param array{
     *     Destination?: string,
     *     DestinationPort?: string,
     *     Direction?: string,
     *     Protocol?: string,
     *     Source?: string,
     *     SourcePort?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

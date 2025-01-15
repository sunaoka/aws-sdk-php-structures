<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Destination
 * @property string|null $DestinationPort
 * @property string|null $Direction
 * @property string|null $Protocol
 * @property string|null $Source
 * @property string|null $SourcePort
 */
class RuleGroupSourceStatefulRulesHeaderDetails extends Shape
{
    /**
     * @param array{
     *     Destination?: string|null,
     *     DestinationPort?: string|null,
     *     Direction?: string|null,
     *     Protocol?: string|null,
     *     Source?: string|null,
     *     SourcePort?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

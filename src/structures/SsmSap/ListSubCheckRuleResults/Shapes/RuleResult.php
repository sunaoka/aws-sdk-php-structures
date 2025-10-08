<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListSubCheckRuleResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Description
 * @property 'PASSED'|'FAILED'|'WARNING'|'INFO'|'UNKNOWN'|null $Status
 * @property string|null $Message
 * @property array<string, string>|null $Metadata
 */
class RuleResult extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Description?: string|null,
     *     Status?: 'PASSED'|'FAILED'|'WARNING'|'INFO'|'UNKNOWN'|null,
     *     Message?: string|null,
     *     Metadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

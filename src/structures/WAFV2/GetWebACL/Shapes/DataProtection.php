<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldToProtect $Field
 * @property 'SUBSTITUTION'|'HASH' $Action
 * @property bool|null $ExcludeRuleMatchDetails
 * @property bool|null $ExcludeRateBasedDetails
 */
class DataProtection extends Shape
{
    /**
     * @param array{
     *     Field: FieldToProtect,
     *     Action: 'SUBSTITUTION'|'HASH',
     *     ExcludeRuleMatchDetails?: bool|null,
     *     ExcludeRateBasedDetails?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

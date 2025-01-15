<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataId
 * @property bool|null $Negated
 * @property string|null $Type
 */
class AwsWafRegionalRateBasedRuleMatchPredicate extends Shape
{
    /**
     * @param array{
     *     DataId?: string|null,
     *     Negated?: bool|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

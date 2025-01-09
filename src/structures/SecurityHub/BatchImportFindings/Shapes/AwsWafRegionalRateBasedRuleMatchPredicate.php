<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataId
 * @property bool $Negated
 * @property string $Type
 */
class AwsWafRegionalRateBasedRuleMatchPredicate extends Shape
{
    /**
     * @param array{
     *     DataId?: string,
     *     Negated?: bool,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

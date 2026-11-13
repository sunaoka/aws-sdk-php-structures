<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'IP'|'DOMAIN'|'FILE'|null $Type
 */
class InvestigationIndicator extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     Type?: 'IP'|'DOMAIN'|'FILE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

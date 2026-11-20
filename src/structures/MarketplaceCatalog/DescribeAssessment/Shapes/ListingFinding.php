<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Action
 * @property string $Description
 * @property 'BLOCKING'|'ADVISORY' $Severity
 * @property 'PASS'|'FAIL' $Status
 */
class ListingFinding extends Shape
{
    /**
     * @param array{
     *     Action: string,
     *     Description: string,
     *     Severity: 'BLOCKING'|'ADVISORY',
     *     Status: 'PASS'|'FAIL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

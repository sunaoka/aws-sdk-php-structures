<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateQuotaShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESERVE'|'LEND'|'LEND_AND_BORROW' $strategy
 * @property int|null $borrowLimit
 */
class QuotaShareResourceSharingConfiguration extends Shape
{
    /**
     * @param array{
     *     strategy: 'RESERVE'|'LEND'|'LEND_AND_BORROW',
     *     borrowLimit?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetSizeConstraintSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SizeConstraintSetId
 */
class GetSizeConstraintSetRequest extends Request
{
    /**
     * @param array{SizeConstraintSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

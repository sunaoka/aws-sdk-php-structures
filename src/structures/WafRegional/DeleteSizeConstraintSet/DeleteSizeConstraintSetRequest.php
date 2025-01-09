<?php

namespace Sunaoka\Aws\Structures\WafRegional\DeleteSizeConstraintSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SizeConstraintSetId
 * @property string $ChangeToken
 */
class DeleteSizeConstraintSetRequest extends Request
{
    /**
     * @param array{
     *     SizeConstraintSetId: string,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

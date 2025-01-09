<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateSizeConstraintSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SizeConstraintSetId
 * @property string $ChangeToken
 * @property list<Shapes\SizeConstraintSetUpdate> $Updates
 */
class UpdateSizeConstraintSetRequest extends Request
{
    /**
     * @param array{
     *     SizeConstraintSetId: string,
     *     ChangeToken: string,
     *     Updates: list<Shapes\SizeConstraintSetUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

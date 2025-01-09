<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetQueryState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryId
 */
class GetQueryStateRequest extends Request
{
    /**
     * @param array{QueryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

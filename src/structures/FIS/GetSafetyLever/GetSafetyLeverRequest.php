<?php

namespace Sunaoka\Aws\Structures\FIS\GetSafetyLever;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetSafetyLeverRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

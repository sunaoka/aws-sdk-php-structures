<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 */
class GetFarmRequest extends Request
{
    /**
     * @param array{farmId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

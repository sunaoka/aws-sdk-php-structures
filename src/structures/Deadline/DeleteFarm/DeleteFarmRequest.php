<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteFarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 */
class DeleteFarmRequest extends Request
{
    /**
     * @param array{farmId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

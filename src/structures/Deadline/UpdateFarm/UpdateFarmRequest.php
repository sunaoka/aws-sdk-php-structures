<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $displayName
 * @property string $description
 */
class UpdateFarmRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     displayName?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

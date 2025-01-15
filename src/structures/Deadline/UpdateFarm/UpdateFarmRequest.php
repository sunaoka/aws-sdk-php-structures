<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string|null $displayName
 * @property string|null $description
 */
class UpdateFarmRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     displayName?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

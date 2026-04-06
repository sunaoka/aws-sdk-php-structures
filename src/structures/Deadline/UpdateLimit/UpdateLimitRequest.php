<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $limitId
 * @property string|null $displayName
 * @property string|null $description
 * @property int<-1, 2147483647>|null $maxCount
 */
class UpdateLimitRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     limitId: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     maxCount?: int<-1, 2147483647>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string|null $clientToken
 * @property string $displayName
 * @property string $amountRequirementName
 * @property int<-1, 2147483647> $maxCount
 * @property string|null $description
 */
class CreateLimitRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     clientToken?: string|null,
     *     displayName: string,
     *     amountRequirementName: string,
     *     maxCount: int<-1, 2147483647>,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

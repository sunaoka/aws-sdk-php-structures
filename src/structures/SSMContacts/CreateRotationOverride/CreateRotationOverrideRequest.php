<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateRotationOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RotationId
 * @property list<string> $NewContactIds
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string|null $IdempotencyToken
 */
class CreateRotationOverrideRequest extends Request
{
    /**
     * @param array{
     *     RotationId: string,
     *     NewContactIds: list<string>,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     IdempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

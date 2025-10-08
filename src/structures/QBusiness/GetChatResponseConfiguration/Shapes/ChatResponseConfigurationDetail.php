<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatResponseConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'ALL', ResponseConfiguration>|null $responseConfigurations
 * @property string|null $responseConfigurationSummary
 * @property 'CREATING'|'UPDATING'|'FAILED'|'ACTIVE'|null $status
 * @property ErrorDetail|null $error
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ChatResponseConfigurationDetail extends Shape
{
    /**
     * @param array{
     *     responseConfigurations?: array<'ALL', ResponseConfiguration>|null,
     *     responseConfigurationSummary?: string|null,
     *     status?: 'CREATING'|'UPDATING'|'FAILED'|'ACTIVE'|null,
     *     error?: ErrorDetail|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

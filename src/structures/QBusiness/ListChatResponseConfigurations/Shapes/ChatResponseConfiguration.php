<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListChatResponseConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $chatResponseConfigurationId
 * @property string $chatResponseConfigurationArn
 * @property string $displayName
 * @property string|null $responseConfigurationSummary
 * @property 'CREATING'|'UPDATING'|'FAILED'|'ACTIVE' $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ChatResponseConfiguration extends Shape
{
    /**
     * @param array{
     *     chatResponseConfigurationId: string,
     *     chatResponseConfigurationArn: string,
     *     displayName: string,
     *     responseConfigurationSummary?: string|null,
     *     status: 'CREATING'|'UPDATING'|'FAILED'|'ACTIVE',
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

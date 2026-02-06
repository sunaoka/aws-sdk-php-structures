<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListBrowserProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $profileId
 * @property string $profileArn
 * @property string $name
 * @property string|null $description
 * @property 'READY'|'DELETING'|'DELETED'|'SAVING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $lastSavedAt
 * @property string|null $lastSavedBrowserSessionId
 * @property string|null $lastSavedBrowserId
 */
class BrowserProfileSummary extends Shape
{
    /**
     * @param array{
     *     profileId: string,
     *     profileArn: string,
     *     name: string,
     *     description?: string|null,
     *     status: 'READY'|'DELETING'|'DELETED'|'SAVING',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     lastSavedAt?: \Aws\Api\DateTimeResult|null,
     *     lastSavedBrowserSessionId?: string|null,
     *     lastSavedBrowserId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

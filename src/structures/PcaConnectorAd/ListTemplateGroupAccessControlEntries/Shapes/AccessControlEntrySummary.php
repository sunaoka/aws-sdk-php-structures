<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplateGroupAccessControlEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessRights $AccessRights
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $GroupDisplayName
 * @property string $GroupSecurityIdentifier
 * @property string $TemplateArn
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class AccessControlEntrySummary extends Shape
{
    /**
     * @param array{
     *     AccessRights?: AccessRights,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     GroupDisplayName?: string,
     *     GroupSecurityIdentifier?: string,
     *     TemplateArn?: string,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

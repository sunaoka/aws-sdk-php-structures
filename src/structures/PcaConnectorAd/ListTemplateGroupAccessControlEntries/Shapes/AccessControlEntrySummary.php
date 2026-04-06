<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplateGroupAccessControlEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessRights|null $AccessRights
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $GroupDisplayName
 * @property string|null $GroupSecurityIdentifier
 * @property string|null $TemplateArn
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class AccessControlEntrySummary extends Shape
{
    /**
     * @param array{
     *     AccessRights?: AccessRights|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     GroupDisplayName?: string|null,
     *     GroupSecurityIdentifier?: string|null,
     *     TemplateArn?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateId
 * @property string $templateArn
 * @property string $templateName
 * @property 'CUSTOMER'|'AWS'|null $templateOwner
 * @property 'DRAFT'|'ACTIVE'|'DISABLED'|null $status
 * @property string|null $version
 * @property bool|null $hasPublishedVersion
 * @property 'WAF'|'IGW_FIREWALL'|null $firewallType
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     templateId: string,
     *     templateArn: string,
     *     templateName: string,
     *     templateOwner?: 'CUSTOMER'|'AWS'|null,
     *     status?: 'DRAFT'|'ACTIVE'|'DISABLED'|null,
     *     version?: string|null,
     *     hasPublishedVersion?: bool|null,
     *     firewallType?: 'WAF'|'IGW_FIREWALL'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

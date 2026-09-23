<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListTemplateSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateId
 * @property string $templateArn
 * @property string $templateName
 * @property 'DRAFT'|'ACTIVE'|'DISABLED'|null $status
 * @property string|null $version
 * @property bool|null $hasPublishedVersion
 * @property 'WAF'|null $firewallType
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     templateId: string,
     *     templateArn: string,
     *     templateName: string,
     *     status?: 'DRAFT'|'ACTIVE'|'DISABLED'|null,
     *     version?: string|null,
     *     hasPublishedVersion?: bool|null,
     *     firewallType?: 'WAF'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

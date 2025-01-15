<?php

namespace Sunaoka\Aws\Structures\Iot\ListProvisioningTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $templateArn
 * @property string|null $templateName
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property bool|null $enabled
 * @property 'FLEET_PROVISIONING'|'JITP'|null $type
 */
class ProvisioningTemplateSummary extends Shape
{
    /**
     * @param array{
     *     templateArn?: string|null,
     *     templateName?: string|null,
     *     description?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     enabled?: bool|null,
     *     type?: 'FLEET_PROVISIONING'|'JITP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

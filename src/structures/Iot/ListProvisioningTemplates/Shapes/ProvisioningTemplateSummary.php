<?php

namespace Sunaoka\Aws\Structures\Iot\ListProvisioningTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateArn
 * @property string $templateName
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property bool $enabled
 * @property 'FLEET_PROVISIONING'|'JITP' $type
 */
class ProvisioningTemplateSummary extends Shape
{
    /**
     * @param array{
     *     templateArn?: string,
     *     templateName?: string,
     *     description?: string,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult,
     *     enabled?: bool,
     *     type?: 'FLEET_PROVISIONING'|'JITP'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

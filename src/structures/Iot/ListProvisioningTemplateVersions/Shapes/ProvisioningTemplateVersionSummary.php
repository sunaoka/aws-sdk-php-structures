<?php

namespace Sunaoka\Aws\Structures\Iot\ListProvisioningTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $versionId
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property bool $isDefaultVersion
 */
class ProvisioningTemplateVersionSummary extends Shape
{
    /**
     * @param array{
     *     versionId?: int,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     isDefaultVersion?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

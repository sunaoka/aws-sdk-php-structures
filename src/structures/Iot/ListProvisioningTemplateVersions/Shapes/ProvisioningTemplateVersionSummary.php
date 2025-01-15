<?php

namespace Sunaoka\Aws\Structures\Iot\ListProvisioningTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $versionId
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property bool|null $isDefaultVersion
 */
class ProvisioningTemplateVersionSummary extends Shape
{
    /**
     * @param array{
     *     versionId?: int|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     isDefaultVersion?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

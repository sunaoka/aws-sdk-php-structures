<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateThreatModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationId
 * @property string $containerId
 * @property string|null $parentId
 * @property string|null $documentId
 */
class ReportDestination extends Shape
{
    /**
     * @param array{
     *     integrationId: string,
     *     containerId: string,
     *     parentId?: string|null,
     *     documentId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

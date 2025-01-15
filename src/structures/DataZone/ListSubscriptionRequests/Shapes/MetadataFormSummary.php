<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $formName
 * @property string $typeName
 * @property string $typeRevision
 */
class MetadataFormSummary extends Shape
{
    /**
     * @param array{
     *     formName?: string|null,
     *     typeName: string,
     *     typeRevision: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

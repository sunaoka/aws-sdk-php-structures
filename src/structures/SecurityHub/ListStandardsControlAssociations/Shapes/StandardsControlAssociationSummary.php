<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListStandardsControlAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StandardsArn
 * @property string $SecurityControlId
 * @property string $SecurityControlArn
 * @property 'ENABLED'|'DISABLED' $AssociationStatus
 * @property list<string> $RelatedRequirements
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $UpdatedReason
 * @property string $StandardsControlTitle
 * @property string $StandardsControlDescription
 */
class StandardsControlAssociationSummary extends Shape
{
    /**
     * @param array{
     *     StandardsArn: string,
     *     SecurityControlId: string,
     *     SecurityControlArn: string,
     *     AssociationStatus: 'ENABLED'|'DISABLED',
     *     RelatedRequirements?: list<string>,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedReason?: string,
     *     StandardsControlTitle?: string,
     *     StandardsControlDescription?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

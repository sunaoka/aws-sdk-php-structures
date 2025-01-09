<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetStandardsControlAssociations\Shapes;

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
 * @property list<string> $StandardsControlArns
 */
class StandardsControlAssociationDetail extends Shape
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
     *     StandardsControlDescription?: string,
     *     StandardsControlArns?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

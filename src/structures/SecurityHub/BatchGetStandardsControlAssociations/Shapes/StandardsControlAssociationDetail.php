<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetStandardsControlAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StandardsArn
 * @property string $SecurityControlId
 * @property string $SecurityControlArn
 * @property 'ENABLED'|'DISABLED' $AssociationStatus
 * @property list<string>|null $RelatedRequirements
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $UpdatedReason
 * @property string|null $StandardsControlTitle
 * @property string|null $StandardsControlDescription
 * @property list<string>|null $StandardsControlArns
 */
class StandardsControlAssociationDetail extends Shape
{
    /**
     * @param array{
     *     StandardsArn: string,
     *     SecurityControlId: string,
     *     SecurityControlArn: string,
     *     AssociationStatus: 'ENABLED'|'DISABLED',
     *     RelatedRequirements?: list<string>|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedReason?: string|null,
     *     StandardsControlTitle?: string|null,
     *     StandardsControlDescription?: string|null,
     *     StandardsControlArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

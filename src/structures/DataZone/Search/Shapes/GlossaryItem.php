<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string $owningProjectId
 * @property string|null $description
 * @property 'DISABLED'|'ENABLED' $status
 * @property list<'ASSET_GOVERNED_TERMS'>|null $usageRestrictions
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property GlossaryItemAdditionalAttributes|null $additionalAttributes
 */
class GlossaryItem extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     id: string,
     *     name: string,
     *     owningProjectId: string,
     *     description?: string|null,
     *     status: 'DISABLED'|'ENABLED',
     *     usageRestrictions?: list<'ASSET_GOVERNED_TERMS'>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     additionalAttributes?: GlossaryItemAdditionalAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

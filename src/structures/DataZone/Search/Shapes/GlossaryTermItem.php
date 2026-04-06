<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $glossaryId
 * @property string $id
 * @property string $name
 * @property string|null $shortDescription
 * @property list<'ASSET_GOVERNED_TERMS'>|null $usageRestrictions
 * @property string|null $longDescription
 * @property TermRelations|null $termRelations
 * @property 'ENABLED'|'DISABLED' $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property GlossaryTermItemAdditionalAttributes|null $additionalAttributes
 */
class GlossaryTermItem extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     glossaryId: string,
     *     id: string,
     *     name: string,
     *     shortDescription?: string|null,
     *     usageRestrictions?: list<'ASSET_GOVERNED_TERMS'>|null,
     *     longDescription?: string|null,
     *     termRelations?: TermRelations|null,
     *     status: 'ENABLED'|'DISABLED',
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     additionalAttributes?: GlossaryTermItemAdditionalAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlossaryTermItemAdditionalAttributes|null $additionalAttributes
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string $domainId
 * @property string $glossaryId
 * @property string $id
 * @property string|null $longDescription
 * @property string $name
 * @property string|null $shortDescription
 * @property 'ENABLED'|'DISABLED' $status
 * @property TermRelations|null $termRelations
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property list<'ASSET_GOVERNED_TERMS'>|null $usageRestrictions
 */
class GlossaryTermItem extends Shape
{
    /**
     * @param array{
     *     additionalAttributes?: GlossaryTermItemAdditionalAttributes|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     domainId: string,
     *     glossaryId: string,
     *     id: string,
     *     longDescription?: string|null,
     *     name: string,
     *     shortDescription?: string|null,
     *     status: 'ENABLED'|'DISABLED',
     *     termRelations?: TermRelations|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     usageRestrictions?: list<'ASSET_GOVERNED_TERMS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $identifier
 * @property string $name
 * @property string $typeIdentifier
 * @property string $typeRevision
 * @property string|null $externalIdentifier
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $firstRevisionCreatedAt
 * @property string|null $firstRevisionCreatedBy
 * @property list<string>|null $glossaryTerms
 * @property string $owningProjectId
 * @property AssetItemAdditionalAttributes|null $additionalAttributes
 * @property list<string>|null $governedGlossaryTerms
 */
class AssetItem extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     identifier: string,
     *     name: string,
     *     typeIdentifier: string,
     *     typeRevision: string,
     *     externalIdentifier?: string|null,
     *     description?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     firstRevisionCreatedAt?: \Aws\Api\DateTimeResult|null,
     *     firstRevisionCreatedBy?: string|null,
     *     glossaryTerms?: list<string>|null,
     *     owningProjectId: string,
     *     additionalAttributes?: AssetItemAdditionalAttributes|null,
     *     governedGlossaryTerms?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

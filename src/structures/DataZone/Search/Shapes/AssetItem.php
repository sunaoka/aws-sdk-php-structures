<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetItemAdditionalAttributes|null $additionalAttributes
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string|null $externalIdentifier
 * @property \Aws\Api\DateTimeResult|null $firstRevisionCreatedAt
 * @property string|null $firstRevisionCreatedBy
 * @property list<string>|null $glossaryTerms
 * @property string $identifier
 * @property string $name
 * @property string $owningProjectId
 * @property string $typeIdentifier
 * @property string $typeRevision
 */
class AssetItem extends Shape
{
    /**
     * @param array{
     *     additionalAttributes?: AssetItemAdditionalAttributes|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     description?: string|null,
     *     domainId: string,
     *     externalIdentifier?: string|null,
     *     firstRevisionCreatedAt?: \Aws\Api\DateTimeResult|null,
     *     firstRevisionCreatedBy?: string|null,
     *     glossaryTerms?: list<string>|null,
     *     identifier: string,
     *     name: string,
     *     owningProjectId: string,
     *     typeIdentifier: string,
     *     typeRevision: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

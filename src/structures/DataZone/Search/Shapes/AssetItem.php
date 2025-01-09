<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetItemAdditionalAttributes $additionalAttributes
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $externalIdentifier
 * @property \Aws\Api\DateTimeResult $firstRevisionCreatedAt
 * @property string $firstRevisionCreatedBy
 * @property list<string> $glossaryTerms
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
     *     additionalAttributes?: AssetItemAdditionalAttributes,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     description?: string,
     *     domainId: string,
     *     externalIdentifier?: string,
     *     firstRevisionCreatedAt?: \Aws\Api\DateTimeResult,
     *     firstRevisionCreatedBy?: string,
     *     glossaryTerms?: list<string>,
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

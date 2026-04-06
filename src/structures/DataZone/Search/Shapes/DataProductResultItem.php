<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string $owningProjectId
 * @property string|null $description
 * @property list<string>|null $glossaryTerms
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $firstRevisionCreatedAt
 * @property string|null $firstRevisionCreatedBy
 * @property DataProductItemAdditionalAttributes|null $additionalAttributes
 */
class DataProductResultItem extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     id: string,
     *     name: string,
     *     owningProjectId: string,
     *     description?: string|null,
     *     glossaryTerms?: list<string>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     firstRevisionCreatedAt?: \Aws\Api\DateTimeResult|null,
     *     firstRevisionCreatedBy?: string|null,
     *     additionalAttributes?: DataProductItemAdditionalAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

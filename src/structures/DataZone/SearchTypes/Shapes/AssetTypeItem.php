<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property array<string, FormEntryOutput> $formsOutput
 * @property string $name
 * @property string|null $originDomainId
 * @property string|null $originProjectId
 * @property string $owningProjectId
 * @property string $revision
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class AssetTypeItem extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     description?: string|null,
     *     domainId: string,
     *     formsOutput: array<string, FormEntryOutput>,
     *     name: string,
     *     originDomainId?: string|null,
     *     originProjectId?: string|null,
     *     owningProjectId: string,
     *     revision: string,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

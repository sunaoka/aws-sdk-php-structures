<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property array<string, FormEntryOutput> $formsOutput
 * @property string $name
 * @property string $originDomainId
 * @property string $originProjectId
 * @property string $owningProjectId
 * @property string $revision
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class AssetTypeItem extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     description?: string,
     *     domainId: string,
     *     formsOutput: array<string, FormEntryOutput>,
     *     name: string,
     *     originDomainId?: string,
     *     originProjectId?: string,
     *     owningProjectId: string,
     *     revision: string,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

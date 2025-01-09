<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property list<Import> $imports
 * @property Model $model
 * @property string $name
 * @property string $originDomainId
 * @property string $originProjectId
 * @property string $owningProjectId
 * @property string $revision
 * @property 'ENABLED'|'DISABLED' $status
 */
class FormTypeData extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     description?: string,
     *     domainId: string,
     *     imports?: list<Import>,
     *     model?: Model,
     *     name: string,
     *     originDomainId?: string,
     *     originProjectId?: string,
     *     owningProjectId?: string,
     *     revision: string,
     *     status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

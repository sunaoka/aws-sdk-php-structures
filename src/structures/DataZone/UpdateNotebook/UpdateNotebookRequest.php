<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateNotebook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $description
 * @property 'ACTIVE'|'ARCHIVED'|null $status
 * @property string|null $name
 * @property list<Shapes\CellInformation>|null $cellOrder
 * @property array<string, string>|null $metadata
 * @property array<string, string>|null $parameters
 * @property Shapes\EnvironmentConfig|null $environmentConfiguration
 * @property string|null $clientToken
 */
class UpdateNotebookRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     description?: string|null,
     *     status?: 'ACTIVE'|'ARCHIVED'|null,
     *     name?: string|null,
     *     cellOrder?: list<Shapes\CellInformation>|null,
     *     metadata?: array<string, string>|null,
     *     parameters?: array<string, string>|null,
     *     environmentConfiguration?: Shapes\EnvironmentConfig|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

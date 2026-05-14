<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateNotebook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $owningProjectIdentifier
 * @property string $name
 * @property string|null $description
 * @property array<string, string>|null $metadata
 * @property array<string, string>|null $parameters
 * @property string|null $clientToken
 */
class CreateNotebookRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     owningProjectIdentifier: string,
     *     name: string,
     *     description?: string|null,
     *     metadata?: array<string, string>|null,
     *     parameters?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

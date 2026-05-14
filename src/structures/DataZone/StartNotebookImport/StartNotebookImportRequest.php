<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $owningProjectIdentifier
 * @property Shapes\SourceLocation $sourceLocation
 * @property string $name
 * @property string|null $description
 * @property string|null $clientToken
 */
class StartNotebookImportRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     owningProjectIdentifier: string,
     *     sourceLocation: Shapes\SourceLocation,
     *     name: string,
     *     description?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

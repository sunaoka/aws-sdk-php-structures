<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookSync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $owningProjectIdentifier
 * @property Shapes\SourceLocation $sourceLocation
 * @property Shapes\GitMetadata|null $gitMetadata
 * @property string|null $notebookId
 * @property string|null $name
 * @property string|null $description
 * @property string|null $clientToken
 */
class StartNotebookSyncRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     owningProjectIdentifier: string,
     *     sourceLocation: Shapes\SourceLocation,
     *     gitMetadata?: Shapes\GitMetadata|null,
     *     notebookId?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

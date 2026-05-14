<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $notebookIdentifier
 * @property string $owningProjectIdentifier
 * @property 'PDF'|'IPYNB' $fileFormat
 * @property string|null $clientToken
 */
class StartNotebookExportRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     notebookIdentifier: string,
     *     owningProjectIdentifier: string,
     *     fileFormat: 'PDF'|'IPYNB',
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

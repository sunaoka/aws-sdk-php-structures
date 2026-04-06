<?php

namespace Sunaoka\Aws\Structures\Athena\ImportNotebook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkGroup
 * @property string $Name
 * @property string|null $Payload
 * @property 'IPYNB' $Type
 * @property string|null $NotebookS3LocationUri
 * @property string|null $ClientRequestToken
 */
class ImportNotebookRequest extends Request
{
    /**
     * @param array{
     *     WorkGroup: string,
     *     Name: string,
     *     Payload?: string|null,
     *     Type: 'IPYNB',
     *     NotebookS3LocationUri?: string|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

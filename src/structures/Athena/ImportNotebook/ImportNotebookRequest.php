<?php

namespace Sunaoka\Aws\Structures\Athena\ImportNotebook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkGroup
 * @property string $Name
 * @property string $Payload
 * @property 'IPYNB' $Type
 * @property string $NotebookS3LocationUri
 * @property string $ClientRequestToken
 */
class ImportNotebookRequest extends Request
{
    /**
     * @param array{
     *     WorkGroup: string,
     *     Name: string,
     *     Payload?: string,
     *     Type: 'IPYNB',
     *     NotebookS3LocationUri?: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

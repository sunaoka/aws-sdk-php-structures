<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateNotebook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookId
 * @property string $Payload
 * @property 'IPYNB' $Type
 * @property string $SessionId
 * @property string $ClientRequestToken
 */
class UpdateNotebookRequest extends Request
{
    /**
     * @param array{
     *     NotebookId: string,
     *     Payload: string,
     *     Type: 'IPYNB',
     *     SessionId?: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

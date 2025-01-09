<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateNotebookMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookId
 * @property string $ClientRequestToken
 * @property string $Name
 */
class UpdateNotebookMetadataRequest extends Request
{
    /**
     * @param array{
     *     NotebookId: string,
     *     ClientRequestToken?: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

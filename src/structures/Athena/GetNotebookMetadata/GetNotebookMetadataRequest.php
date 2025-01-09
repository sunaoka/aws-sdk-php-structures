<?php

namespace Sunaoka\Aws\Structures\Athena\GetNotebookMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookId
 */
class GetNotebookMetadataRequest extends Request
{
    /**
     * @param array{NotebookId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

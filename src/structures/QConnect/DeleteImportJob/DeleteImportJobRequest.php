<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $importJobId
 */
class DeleteImportJobRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     importJobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

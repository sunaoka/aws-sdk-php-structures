<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $importJobId
 * @property string $knowledgeBaseId
 */
class GetImportJobRequest extends Request
{
    /**
     * @param array{
     *     importJobId: string,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

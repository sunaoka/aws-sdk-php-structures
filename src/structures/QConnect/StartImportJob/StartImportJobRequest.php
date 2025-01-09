<?php

namespace Sunaoka\Aws\Structures\QConnect\StartImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property Shapes\ExternalSourceConfiguration $externalSourceConfiguration
 * @property 'QUICK_RESPONSES' $importJobType
 * @property string $knowledgeBaseId
 * @property array<string, string> $metadata
 * @property string $uploadId
 */
class StartImportJobRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     externalSourceConfiguration?: Shapes\ExternalSourceConfiguration,
     *     importJobType: 'QUICK_RESPONSES',
     *     knowledgeBaseId: string,
     *     metadata?: array<string, string>,
     *     uploadId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

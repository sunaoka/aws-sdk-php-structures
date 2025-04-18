<?php

namespace Sunaoka\Aws\Structures\QConnect\StartImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property 'QUICK_RESPONSES' $importJobType
 * @property string $uploadId
 * @property string|null $clientToken
 * @property array<string, string>|null $metadata
 * @property Shapes\ExternalSourceConfiguration|null $externalSourceConfiguration
 */
class StartImportJobRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     importJobType: 'QUICK_RESPONSES',
     *     uploadId: string,
     *     clientToken?: string|null,
     *     metadata?: array<string, string>|null,
     *     externalSourceConfiguration?: Shapes\ExternalSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

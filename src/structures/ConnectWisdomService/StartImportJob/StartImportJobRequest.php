<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\StartImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\ExternalSourceConfiguration|null $externalSourceConfiguration
 * @property 'QUICK_RESPONSES' $importJobType
 * @property string $knowledgeBaseId
 * @property array<string, string>|null $metadata
 * @property string $uploadId
 */
class StartImportJobRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     externalSourceConfiguration?: Shapes\ExternalSourceConfiguration|null,
     *     importJobType: 'QUICK_RESPONSES',
     *     knowledgeBaseId: string,
     *     metadata?: array<string, string>|null,
     *     uploadId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

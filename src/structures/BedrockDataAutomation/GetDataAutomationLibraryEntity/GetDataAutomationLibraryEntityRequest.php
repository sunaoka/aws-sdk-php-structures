<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationLibraryEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $libraryArn
 * @property 'VOCABULARY' $entityType
 * @property string $entityId
 */
class GetDataAutomationLibraryEntityRequest extends Request
{
    /**
     * @param array{
     *     libraryArn: string,
     *     entityType: 'VOCABULARY',
     *     entityId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

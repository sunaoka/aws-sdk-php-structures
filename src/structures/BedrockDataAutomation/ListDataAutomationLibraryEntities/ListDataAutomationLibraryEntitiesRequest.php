<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationLibraryEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $libraryArn
 * @property 'VOCABULARY' $entityType
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListDataAutomationLibraryEntitiesRequest extends Request
{
    /**
     * @param array{
     *     libraryArn: string,
     *     entityType: 'VOCABULARY',
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

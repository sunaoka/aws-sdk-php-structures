<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateQuickResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $channels
 * @property string $clientToken
 * @property Shapes\QuickResponseDataProvider $content
 * @property string $contentType
 * @property string $description
 * @property Shapes\GroupingConfiguration $groupingConfiguration
 * @property bool $isActive
 * @property string $knowledgeBaseId
 * @property string $language
 * @property string $name
 * @property string $shortcutKey
 * @property array<string, string> $tags
 */
class CreateQuickResponseRequest extends Request
{
    /**
     * @param array{
     *     channels?: list<string>,
     *     clientToken?: string,
     *     content: Shapes\QuickResponseDataProvider,
     *     contentType?: string,
     *     description?: string,
     *     groupingConfiguration?: Shapes\GroupingConfiguration,
     *     isActive?: bool,
     *     knowledgeBaseId: string,
     *     language?: string,
     *     name: string,
     *     shortcutKey?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateQuickResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $channels
 * @property Shapes\QuickResponseDataProvider $content
 * @property string $contentType
 * @property string $description
 * @property Shapes\GroupingConfiguration $groupingConfiguration
 * @property bool $isActive
 * @property string $knowledgeBaseId
 * @property string $language
 * @property string $name
 * @property string $quickResponseId
 * @property bool $removeDescription
 * @property bool $removeGroupingConfiguration
 * @property bool $removeShortcutKey
 * @property string $shortcutKey
 */
class UpdateQuickResponseRequest extends Request
{
    /**
     * @param array{
     *     channels?: list<string>,
     *     content?: Shapes\QuickResponseDataProvider,
     *     contentType?: string,
     *     description?: string,
     *     groupingConfiguration?: Shapes\GroupingConfiguration,
     *     isActive?: bool,
     *     knowledgeBaseId: string,
     *     language?: string,
     *     name?: string,
     *     quickResponseId: string,
     *     removeDescription?: bool,
     *     removeGroupingConfiguration?: bool,
     *     removeShortcutKey?: bool,
     *     shortcutKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

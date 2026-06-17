<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $providerResourceId
 * @property string $spaceKey
 * @property string $pageId
 * @property string|null $title
 * @property string|null $spaceTitle
 */
class ConfluenceDocumentMetadata extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     providerResourceId: string,
     *     spaceKey: string,
     *     pageId: string,
     *     title?: string|null,
     *     spaceTitle?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

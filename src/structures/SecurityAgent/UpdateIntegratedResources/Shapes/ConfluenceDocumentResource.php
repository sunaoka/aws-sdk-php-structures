<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $spaceKey
 * @property string $pageId
 * @property string|null $title
 * @property string|null $spaceTitle
 */
class ConfluenceDocumentResource extends Shape
{
    /**
     * @param array{
     *     name: string,
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

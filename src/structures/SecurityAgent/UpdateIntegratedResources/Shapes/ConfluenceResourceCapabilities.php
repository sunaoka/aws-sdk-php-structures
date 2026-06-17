<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $fetchDocument
 * @property bool|null $createDocument
 * @property bool|null $updateDocument
 */
class ConfluenceResourceCapabilities extends Shape
{
    /**
     * @param array{
     *     fetchDocument?: bool|null,
     *     createDocument?: bool|null,
     *     updateDocument?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExtensionAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $ExtensionArn
 * @property string|null $ResourceArn
 */
class ExtensionAssociationSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ExtensionArn?: string|null,
     *     ResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

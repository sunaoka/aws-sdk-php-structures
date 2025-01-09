<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExtensionAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ExtensionArn
 * @property string $ResourceArn
 */
class ExtensionAssociationSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ExtensionArn?: string,
     *     ResourceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

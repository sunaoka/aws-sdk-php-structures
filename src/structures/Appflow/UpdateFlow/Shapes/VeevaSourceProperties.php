<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 * @property string $documentType
 * @property bool $includeSourceFiles
 * @property bool $includeRenditions
 * @property bool $includeAllVersions
 */
class VeevaSourceProperties extends Shape
{
    /**
     * @param array{
     *     object: string,
     *     documentType?: string,
     *     includeSourceFiles?: bool,
     *     includeRenditions?: bool,
     *     includeAllVersions?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

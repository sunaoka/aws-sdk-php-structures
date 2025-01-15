<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 * @property string|null $documentType
 * @property bool|null $includeSourceFiles
 * @property bool|null $includeRenditions
 * @property bool|null $includeAllVersions
 */
class VeevaSourceProperties extends Shape
{
    /**
     * @param array{
     *     object: string,
     *     documentType?: string|null,
     *     includeSourceFiles?: bool|null,
     *     includeRenditions?: bool|null,
     *     includeAllVersions?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

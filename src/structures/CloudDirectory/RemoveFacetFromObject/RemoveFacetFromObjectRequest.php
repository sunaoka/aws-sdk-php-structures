<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\RemoveFacetFromObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\SchemaFacet $SchemaFacet
 * @property Shapes\ObjectReference $ObjectReference
 */
class RemoveFacetFromObjectRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     SchemaFacet: Shapes\SchemaFacet,
     *     ObjectReference: Shapes\ObjectReference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

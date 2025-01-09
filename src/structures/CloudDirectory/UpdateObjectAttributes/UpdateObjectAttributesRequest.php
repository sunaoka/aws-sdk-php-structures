<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateObjectAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property list<Shapes\ObjectAttributeUpdate> $AttributeUpdates
 */
class UpdateObjectAttributesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
     *     AttributeUpdates: list<Shapes\ObjectAttributeUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

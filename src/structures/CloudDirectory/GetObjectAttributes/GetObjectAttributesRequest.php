<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetObjectAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property 'SERIALIZABLE'|'EVENTUAL'|null $ConsistencyLevel
 * @property Shapes\SchemaFacet $SchemaFacet
 * @property list<string> $AttributeNames
 */
class GetObjectAttributesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL'|null,
     *     SchemaFacet: Shapes\SchemaFacet,
     *     AttributeNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

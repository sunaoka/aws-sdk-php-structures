<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetLinkAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\TypedLinkSpecifier $TypedLinkSpecifier
 * @property list<string> $AttributeNames
 * @property 'SERIALIZABLE'|'EVENTUAL' $ConsistencyLevel
 */
class GetLinkAttributesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     TypedLinkSpecifier: Shapes\TypedLinkSpecifier,
     *     AttributeNames: list<string>,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateLinkAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\TypedLinkSpecifier $TypedLinkSpecifier
 * @property list<Shapes\LinkAttributeUpdate> $AttributeUpdates
 */
class UpdateLinkAttributesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     TypedLinkSpecifier: Shapes\TypedLinkSpecifier,
     *     AttributeUpdates: list<Shapes\LinkAttributeUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

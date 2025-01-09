<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DetachTypedLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\TypedLinkSpecifier $TypedLinkSpecifier
 */
class DetachTypedLinkRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     TypedLinkSpecifier: Shapes\TypedLinkSpecifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

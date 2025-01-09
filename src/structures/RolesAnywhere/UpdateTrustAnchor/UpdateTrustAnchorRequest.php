<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateTrustAnchor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\Source $source
 * @property string $trustAnchorId
 */
class UpdateTrustAnchorRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     source?: Shapes\Source,
     *     trustAnchorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

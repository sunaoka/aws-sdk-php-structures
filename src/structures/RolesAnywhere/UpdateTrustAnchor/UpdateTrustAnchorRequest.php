<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateTrustAnchor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trustAnchorId
 * @property string|null $name
 * @property Shapes\Source|null $source
 */
class UpdateTrustAnchorRequest extends Request
{
    /**
     * @param array{
     *     trustAnchorId: string,
     *     name?: string|null,
     *     source?: Shapes\Source|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

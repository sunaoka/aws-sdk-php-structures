<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateTrustAnchor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property Shapes\Source|null $source
 * @property string $trustAnchorId
 */
class UpdateTrustAnchorRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     source?: Shapes\Source|null,
     *     trustAnchorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

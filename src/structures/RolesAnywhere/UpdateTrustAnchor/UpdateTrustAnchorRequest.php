<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateTrustAnchor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trustAnchorId
 * @property string|null $name
 * @property Shapes\Source|null $source
 * @property bool|null $crlDpRevocationEnabled
 * @property string|null $aliasName
 */
class UpdateTrustAnchorRequest extends Request
{
    /**
     * @param array{
     *     trustAnchorId: string,
     *     name?: string|null,
     *     source?: Shapes\Source|null,
     *     crlDpRevocationEnabled?: bool|null,
     *     aliasName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

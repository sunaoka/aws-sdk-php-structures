<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\PutProfileVisibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property 'PRIVATE'|'PUBLIC' $Visibility
 */
class PutProfileVisibilityRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     Visibility: 'PRIVATE'|'PUBLIC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteLens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LensAlias
 * @property string $ClientRequestToken
 * @property 'ALL'|'DRAFT'|'PUBLISHED' $LensStatus
 */
class DeleteLensRequest extends Request
{
    /**
     * @param array{
     *     LensAlias: string,
     *     ClientRequestToken: string,
     *     LensStatus: 'ALL'|'DRAFT'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

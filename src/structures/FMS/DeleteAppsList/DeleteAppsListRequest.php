<?php

namespace Sunaoka\Aws\Structures\FMS\DeleteAppsList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListId
 */
class DeleteAppsListRequest extends Request
{
    /**
     * @param array{ListId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

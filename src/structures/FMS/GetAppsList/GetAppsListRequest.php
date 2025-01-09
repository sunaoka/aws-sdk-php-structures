<?php

namespace Sunaoka\Aws\Structures\FMS\GetAppsList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListId
 * @property bool $DefaultList
 */
class GetAppsListRequest extends Request
{
    /**
     * @param array{
     *     ListId: string,
     *     DefaultList?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

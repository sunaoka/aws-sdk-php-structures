<?php

namespace Sunaoka\Aws\Structures\FMS\PutAppsList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AppsListData $AppsList
 * @property list<Shapes\Tag> $TagList
 */
class PutAppsListRequest extends Request
{
    /**
     * @param array{
     *     AppsList: Shapes\AppsListData,
     *     TagList?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

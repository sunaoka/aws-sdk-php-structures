<?php

namespace Sunaoka\Aws\Structures\FMS\ListAppsLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ListArn
 * @property string|null $ListId
 * @property string|null $ListName
 * @property list<App>|null $AppsList
 */
class AppsListDataSummary extends Shape
{
    /**
     * @param array{
     *     ListArn?: string|null,
     *     ListId?: string|null,
     *     ListName?: string|null,
     *     AppsList?: list<App>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

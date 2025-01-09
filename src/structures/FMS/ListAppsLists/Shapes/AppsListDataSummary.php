<?php

namespace Sunaoka\Aws\Structures\FMS\ListAppsLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ListArn
 * @property string $ListId
 * @property string $ListName
 * @property list<App> $AppsList
 */
class AppsListDataSummary extends Shape
{
    /**
     * @param array{
     *     ListArn?: string,
     *     ListId?: string,
     *     ListName?: string,
     *     AppsList?: list<App>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

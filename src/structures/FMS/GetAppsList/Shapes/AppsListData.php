<?php

namespace Sunaoka\Aws\Structures\FMS\GetAppsList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ListId
 * @property string $ListName
 * @property string $ListUpdateToken
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 * @property list<App> $AppsList
 * @property array<string, list<App>> $PreviousAppsList
 */
class AppsListData extends Shape
{
    /**
     * @param array{
     *     ListId?: string,
     *     ListName: string,
     *     ListUpdateToken?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult,
     *     AppsList: list<App>,
     *     PreviousAppsList?: array<string, list<App>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

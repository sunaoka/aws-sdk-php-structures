<?php

namespace Sunaoka\Aws\Structures\FMS\PutAppsList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ListId
 * @property string $ListName
 * @property string|null $ListUpdateToken
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property list<App> $AppsList
 * @property array<string, list<App>>|null $PreviousAppsList
 */
class AppsListData extends Shape
{
    /**
     * @param array{
     *     ListId?: string|null,
     *     ListName: string,
     *     ListUpdateToken?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     AppsList: list<App>,
     *     PreviousAppsList?: array<string, list<App>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

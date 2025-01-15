<?php

namespace Sunaoka\Aws\Structures\FMS\GetProtocolsList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ListId
 * @property string $ListName
 * @property string|null $ListUpdateToken
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property list<string> $ProtocolsList
 * @property array<string, list<string>>|null $PreviousProtocolsList
 */
class ProtocolsListData extends Shape
{
    /**
     * @param array{
     *     ListId?: string|null,
     *     ListName: string,
     *     ListUpdateToken?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     ProtocolsList: list<string>,
     *     PreviousProtocolsList?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

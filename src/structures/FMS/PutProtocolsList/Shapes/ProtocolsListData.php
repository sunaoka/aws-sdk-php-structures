<?php

namespace Sunaoka\Aws\Structures\FMS\PutProtocolsList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ListId
 * @property string $ListName
 * @property string $ListUpdateToken
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 * @property list<string> $ProtocolsList
 * @property array<string, list<string>> $PreviousProtocolsList
 */
class ProtocolsListData extends Shape
{
    /**
     * @param array{
     *     ListId?: string,
     *     ListName: string,
     *     ListUpdateToken?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult,
     *     ProtocolsList: list<string>,
     *     PreviousProtocolsList?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

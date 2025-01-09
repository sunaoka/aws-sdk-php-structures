<?php

namespace Sunaoka\Aws\Structures\FMS\ListProtocolsLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ListArn
 * @property string $ListId
 * @property string $ListName
 * @property list<string> $ProtocolsList
 */
class ProtocolsListDataSummary extends Shape
{
    /**
     * @param array{
     *     ListArn?: string,
     *     ListId?: string,
     *     ListName?: string,
     *     ProtocolsList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

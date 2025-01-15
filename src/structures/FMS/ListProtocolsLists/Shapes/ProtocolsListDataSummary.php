<?php

namespace Sunaoka\Aws\Structures\FMS\ListProtocolsLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ListArn
 * @property string|null $ListId
 * @property string|null $ListName
 * @property list<string>|null $ProtocolsList
 */
class ProtocolsListDataSummary extends Shape
{
    /**
     * @param array{
     *     ListArn?: string|null,
     *     ListId?: string|null,
     *     ListName?: string|null,
     *     ProtocolsList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

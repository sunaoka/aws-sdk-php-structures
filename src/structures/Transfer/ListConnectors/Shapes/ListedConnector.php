<?php

namespace Sunaoka\Aws\Structures\Transfer\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $ConnectorId
 * @property string $Url
 */
class ListedConnector extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     ConnectorId?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

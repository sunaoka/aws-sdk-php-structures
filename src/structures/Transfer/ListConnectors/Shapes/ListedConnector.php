<?php

namespace Sunaoka\Aws\Structures\Transfer\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $ConnectorId
 * @property string|null $Url
 */
class ListedConnector extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ConnectorId?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

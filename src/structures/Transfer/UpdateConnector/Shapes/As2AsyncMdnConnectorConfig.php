<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Url
 * @property list<string>|null $ServerIds
 */
class As2AsyncMdnConnectorConfig extends Shape
{
    /**
     * @param array{
     *     Url?: string|null,
     *     ServerIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

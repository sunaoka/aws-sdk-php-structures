<?php

namespace Sunaoka\Aws\Structures\ConnectCases\PutCaseEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property EventIncludedData $includedData
 */
class EventBridgeConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     includedData?: EventIncludedData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

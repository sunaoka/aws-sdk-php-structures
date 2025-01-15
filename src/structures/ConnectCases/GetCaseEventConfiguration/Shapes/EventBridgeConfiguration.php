<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property EventIncludedData|null $includedData
 */
class EventBridgeConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     includedData?: EventIncludedData|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

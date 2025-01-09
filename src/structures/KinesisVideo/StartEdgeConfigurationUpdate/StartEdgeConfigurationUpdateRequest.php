<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\StartEdgeConfigurationUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property Shapes\EdgeConfig $EdgeConfig
 */
class StartEdgeConfigurationUpdateRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     EdgeConfig: Shapes\EdgeConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

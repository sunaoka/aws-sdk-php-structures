<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\StartEdgeConfigurationUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property Shapes\EdgeConfig $EdgeConfig
 */
class StartEdgeConfigurationUpdateRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     EdgeConfig: Shapes\EdgeConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

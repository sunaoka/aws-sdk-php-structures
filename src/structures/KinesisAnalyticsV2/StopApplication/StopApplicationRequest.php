<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\StopApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property bool $Force
 */
class StopApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     Force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

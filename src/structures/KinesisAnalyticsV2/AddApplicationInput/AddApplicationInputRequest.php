<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $CurrentApplicationVersionId
 * @property Shapes\Input $Input
 */
class AddApplicationInputRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int,
     *     Input: Shapes\Input
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

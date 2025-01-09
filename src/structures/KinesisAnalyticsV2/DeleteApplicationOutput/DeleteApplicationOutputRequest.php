<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $CurrentApplicationVersionId
 * @property string $OutputId
 */
class DeleteApplicationOutputRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int,
     *     OutputId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

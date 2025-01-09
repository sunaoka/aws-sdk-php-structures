<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $CurrentApplicationVersionId
 * @property Shapes\Output $Output
 */
class AddApplicationOutputRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int,
     *     Output: Shapes\Output
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

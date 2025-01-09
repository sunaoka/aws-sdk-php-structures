<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\RollbackApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999> $CurrentApplicationVersionId
 */
class RollbackApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int<1, 999999999>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

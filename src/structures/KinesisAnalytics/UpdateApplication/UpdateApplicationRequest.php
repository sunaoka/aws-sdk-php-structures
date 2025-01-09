<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999> $CurrentApplicationVersionId
 * @property Shapes\ApplicationUpdate $ApplicationUpdate
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int<1, 999999999>,
     *     ApplicationUpdate: Shapes\ApplicationUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

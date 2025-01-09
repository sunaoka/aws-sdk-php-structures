<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationReferenceDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999> $CurrentApplicationVersionId
 * @property string $ReferenceId
 */
class DeleteApplicationReferenceDataSourceRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int<1, 999999999>,
     *     ReferenceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

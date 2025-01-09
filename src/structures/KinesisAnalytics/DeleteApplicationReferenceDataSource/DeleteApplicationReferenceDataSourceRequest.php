<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DeleteApplicationReferenceDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $CurrentApplicationVersionId
 * @property string $ReferenceId
 */
class DeleteApplicationReferenceDataSourceRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int,
     *     ReferenceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationReferenceDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $CurrentApplicationVersionId
 * @property Shapes\ReferenceDataSource $ReferenceDataSource
 */
class AddApplicationReferenceDataSourceRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int,
     *     ReferenceDataSource: Shapes\ReferenceDataSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationInputProcessingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $CurrentApplicationVersionId
 * @property string $InputId
 */
class DeleteApplicationInputProcessingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int,
     *     InputId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

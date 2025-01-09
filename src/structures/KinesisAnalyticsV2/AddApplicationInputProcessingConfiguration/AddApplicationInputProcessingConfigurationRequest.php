<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationInputProcessingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int $CurrentApplicationVersionId
 * @property string $InputId
 * @property Shapes\InputProcessingConfiguration $InputProcessingConfiguration
 */
class AddApplicationInputProcessingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int,
     *     InputId: string,
     *     InputProcessingConfiguration: Shapes\InputProcessingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

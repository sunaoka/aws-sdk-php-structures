<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationInputProcessingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999> $CurrentApplicationVersionId
 * @property string $InputId
 * @property Shapes\InputProcessingConfiguration $InputProcessingConfiguration
 */
class AddApplicationInputProcessingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int<1, 999999999>,
     *     InputId: string,
     *     InputProcessingConfiguration: Shapes\InputProcessingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DiscoverInputSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property string $ServiceExecutionRole
 * @property Shapes\InputStartingPositionConfiguration $InputStartingPositionConfiguration
 * @property Shapes\S3Configuration $S3Configuration
 * @property Shapes\InputProcessingConfiguration $InputProcessingConfiguration
 */
class DiscoverInputSchemaRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN?: string,
     *     ServiceExecutionRole: string,
     *     InputStartingPositionConfiguration?: Shapes\InputStartingPositionConfiguration,
     *     S3Configuration?: Shapes\S3Configuration,
     *     InputProcessingConfiguration?: Shapes\InputProcessingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

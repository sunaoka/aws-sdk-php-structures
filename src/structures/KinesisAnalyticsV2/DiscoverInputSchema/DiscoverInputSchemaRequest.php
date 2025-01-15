<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DiscoverInputSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceARN
 * @property string $ServiceExecutionRole
 * @property Shapes\InputStartingPositionConfiguration|null $InputStartingPositionConfiguration
 * @property Shapes\S3Configuration|null $S3Configuration
 * @property Shapes\InputProcessingConfiguration|null $InputProcessingConfiguration
 */
class DiscoverInputSchemaRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN?: string|null,
     *     ServiceExecutionRole: string,
     *     InputStartingPositionConfiguration?: Shapes\InputStartingPositionConfiguration|null,
     *     S3Configuration?: Shapes\S3Configuration|null,
     *     InputProcessingConfiguration?: Shapes\InputProcessingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DiscoverInputSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property string $RoleARN
 * @property Shapes\InputStartingPositionConfiguration $InputStartingPositionConfiguration
 * @property Shapes\S3Configuration $S3Configuration
 * @property Shapes\InputProcessingConfiguration $InputProcessingConfiguration
 */
class DiscoverInputSchemaRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN?: string,
     *     RoleARN?: string,
     *     InputStartingPositionConfiguration?: Shapes\InputStartingPositionConfiguration,
     *     S3Configuration?: Shapes\S3Configuration,
     *     InputProcessingConfiguration?: Shapes\InputProcessingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

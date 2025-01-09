<?php

namespace Sunaoka\Aws\Structures\Inspector\GetTelemetryMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentRunArn
 */
class GetTelemetryMetadataRequest extends Request
{
    /**
     * @param array{assessmentRunArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

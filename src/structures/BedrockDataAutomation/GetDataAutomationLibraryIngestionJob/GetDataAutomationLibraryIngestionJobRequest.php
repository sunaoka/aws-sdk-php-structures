<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationLibraryIngestionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $libraryArn
 * @property string $jobArn
 */
class GetDataAutomationLibraryIngestionJobRequest extends Request
{
    /**
     * @param array{
     *     libraryArn: string,
     *     jobArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property string $flowVersion
 * @property 'ALL_DATA'|'METADATA_ONLY'|null $includedData
 */
class GetFlowVersionRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     flowVersion: string,
     *     includedData?: 'ALL_DATA'|'METADATA_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

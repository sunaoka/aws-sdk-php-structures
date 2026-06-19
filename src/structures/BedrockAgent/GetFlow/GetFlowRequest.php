<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property 'ALL_DATA'|'METADATA_ONLY'|null $includedData
 */
class GetFlowRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     includedData?: 'ALL_DATA'|'METADATA_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

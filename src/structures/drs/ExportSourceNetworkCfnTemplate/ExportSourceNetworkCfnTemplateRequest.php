<?php

namespace Sunaoka\Aws\Structures\drs\ExportSourceNetworkCfnTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceNetworkID
 */
class ExportSourceNetworkCfnTemplateRequest extends Request
{
    /**
     * @param array{sourceNetworkID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

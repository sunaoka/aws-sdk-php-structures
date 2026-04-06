<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DisassociateSourceFromS3TableIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class DisassociateSourceFromS3TableIntegrationRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

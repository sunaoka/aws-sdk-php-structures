<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseEventConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 */
class GetCaseEventConfigurationRequest extends Request
{
    /**
     * @param array{domainId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

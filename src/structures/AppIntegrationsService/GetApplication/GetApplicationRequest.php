<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetApplicationRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

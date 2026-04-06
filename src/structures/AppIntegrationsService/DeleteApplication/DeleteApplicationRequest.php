<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

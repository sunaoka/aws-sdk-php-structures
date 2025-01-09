<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteSourceCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteSourceCredentialsRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

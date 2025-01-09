<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DescribeSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 */
class DescribeSecretRequest extends Request
{
    /**
     * @param array{SecretId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

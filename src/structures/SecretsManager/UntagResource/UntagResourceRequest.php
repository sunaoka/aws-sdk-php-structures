<?php

namespace Sunaoka\Aws\Structures\SecretsManager\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

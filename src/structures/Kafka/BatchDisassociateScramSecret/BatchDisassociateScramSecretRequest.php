<?php

namespace Sunaoka\Aws\Structures\Kafka\BatchDisassociateScramSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property list<string> $SecretArnList
 */
class BatchDisassociateScramSecretRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     SecretArnList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

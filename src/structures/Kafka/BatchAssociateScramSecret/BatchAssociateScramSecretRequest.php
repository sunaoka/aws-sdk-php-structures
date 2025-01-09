<?php

namespace Sunaoka\Aws\Structures\Kafka\BatchAssociateScramSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property list<string> $SecretArnList
 */
class BatchAssociateScramSecretRequest extends Request
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

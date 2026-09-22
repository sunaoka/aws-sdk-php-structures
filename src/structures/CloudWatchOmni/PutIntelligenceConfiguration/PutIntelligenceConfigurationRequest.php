<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\PutIntelligenceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $kmsKeyArn
 * @property bool|null $removeKmsKey
 * @property string|null $clientToken
 */
class PutIntelligenceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     kmsKeyArn?: string|null,
     *     removeKmsKey?: bool|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

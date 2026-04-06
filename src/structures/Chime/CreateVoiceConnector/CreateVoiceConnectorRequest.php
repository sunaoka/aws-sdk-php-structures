<?php

namespace Sunaoka\Aws\Structures\Chime\CreateVoiceConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'us-east-1'|'us-west-2'|null $AwsRegion
 * @property bool $RequireEncryption
 */
class CreateVoiceConnectorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     AwsRegion?: 'us-east-1'|'us-west-2'|null,
     *     RequireEncryption: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

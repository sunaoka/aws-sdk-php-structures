<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property list<string> $KafkaVersions
 * @property string $Name
 * @property string|resource|\Psr\Http\Message\StreamInterface $ServerProperties
 */
class CreateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     KafkaVersions?: list<string>,
     *     Name: string,
     *     ServerProperties: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

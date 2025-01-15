<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property list<string>|null $KafkaVersions
 * @property string $Name
 * @property string|resource|\Psr\Http\Message\StreamInterface $ServerProperties
 */
class CreateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     KafkaVersions?: list<string>|null,
     *     Name: string,
     *     ServerProperties: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

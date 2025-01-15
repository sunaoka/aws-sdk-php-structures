<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $Description
 * @property string|resource|\Psr\Http\Message\StreamInterface $ServerProperties
 */
class UpdateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Description?: string|null,
     *     ServerProperties: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

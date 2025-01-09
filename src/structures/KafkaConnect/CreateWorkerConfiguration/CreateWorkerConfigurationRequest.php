<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateWorkerConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $name
 * @property string $propertiesFileContent
 * @property array<string, string> $tags
 */
class CreateWorkerConfigurationRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     name: string,
     *     propertiesFileContent: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

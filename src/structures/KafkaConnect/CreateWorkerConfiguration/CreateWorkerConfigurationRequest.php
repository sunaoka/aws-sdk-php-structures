<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateWorkerConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $name
 * @property string $propertiesFileContent
 * @property array<string, string>|null $tags
 */
class CreateWorkerConfigurationRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     name: string,
     *     propertiesFileContent: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

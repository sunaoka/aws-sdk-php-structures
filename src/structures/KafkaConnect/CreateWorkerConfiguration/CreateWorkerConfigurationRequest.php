<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateWorkerConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $name
 * @property string $propertiesFileContent
 */
class CreateWorkerConfigurationRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     name: string,
     *     propertiesFileContent: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

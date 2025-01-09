<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $name
 * @property Shapes\ServerSideEncryptionConfiguration $serverSideEncryptionConfiguration
 * @property array<string, string> $tags
 * @property 'AGENT' $type
 */
class CreateAssistantRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     name: string,
     *     serverSideEncryptionConfiguration?: Shapes\ServerSideEncryptionConfiguration,
     *     tags?: array<string, string>,
     *     type: 'AGENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

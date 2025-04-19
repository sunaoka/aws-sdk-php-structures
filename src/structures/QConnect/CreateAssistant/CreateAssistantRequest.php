<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property 'AGENT' $type
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property Shapes\ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 */
class CreateAssistantRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     type: 'AGENT',
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     serverSideEncryptionConfiguration?: Shapes\ServerSideEncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

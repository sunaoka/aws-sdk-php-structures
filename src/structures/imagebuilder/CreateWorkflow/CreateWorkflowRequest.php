<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $semanticVersion
 * @property string|null $description
 * @property string|null $changeDescription
 * @property string|null $data
 * @property string|null $uri
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 * @property string $clientToken
 * @property 'BUILD'|'TEST'|'DISTRIBUTION' $type
 */
class CreateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     semanticVersion: string,
     *     description?: string|null,
     *     changeDescription?: string|null,
     *     data?: string|null,
     *     uri?: string|null,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken: string,
     *     type: 'BUILD'|'TEST'|'DISTRIBUTION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

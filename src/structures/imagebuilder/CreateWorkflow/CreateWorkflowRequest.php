<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $semanticVersion
 * @property string $description
 * @property string $changeDescription
 * @property string $data
 * @property string $uri
 * @property string $kmsKeyId
 * @property array<string, string> $tags
 * @property string $clientToken
 * @property 'BUILD'|'TEST'|'DISTRIBUTION' $type
 */
class CreateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     semanticVersion: string,
     *     description?: string,
     *     changeDescription?: string,
     *     data?: string,
     *     uri?: string,
     *     kmsKeyId?: string,
     *     tags?: array<string, string>,
     *     clientToken: string,
     *     type: 'BUILD'|'TEST'|'DISTRIBUTION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

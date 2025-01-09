<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property Shapes\Definition $definition
 * @property string $description
 * @property 'microfocus'|'bluage' $engineType
 * @property string $kmsKeyId
 * @property string $name
 * @property string $roleArn
 * @property array<string, string> $tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     definition: Shapes\Definition,
     *     description?: string,
     *     engineType: 'microfocus'|'bluage',
     *     kmsKeyId?: string,
     *     name: string,
     *     roleArn?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

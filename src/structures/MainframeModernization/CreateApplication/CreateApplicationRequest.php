<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\Definition $definition
 * @property string|null $description
 * @property 'microfocus'|'bluage' $engineType
 * @property string|null $kmsKeyId
 * @property string $name
 * @property string|null $roleArn
 * @property array<string, string>|null $tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     definition: Shapes\Definition,
     *     description?: string|null,
     *     engineType: 'microfocus'|'bluage',
     *     kmsKeyId?: string|null,
     *     name: string,
     *     roleArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

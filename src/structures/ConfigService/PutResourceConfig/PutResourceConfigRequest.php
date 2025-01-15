<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutResourceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceType
 * @property string $SchemaVersionId
 * @property string $ResourceId
 * @property string|null $ResourceName
 * @property string $Configuration
 * @property array<string, string>|null $Tags
 */
class PutResourceConfigRequest extends Request
{
    /**
     * @param array{
     *     ResourceType: string,
     *     SchemaVersionId: string,
     *     ResourceId: string,
     *     ResourceName?: string|null,
     *     Configuration: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

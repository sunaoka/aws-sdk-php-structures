<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateCustomMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $ResourceId
 * @property string|null $VersionId
 * @property array<string, string> $CustomMetadata
 */
class CreateCustomMetadataRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     ResourceId: string,
     *     VersionId?: string|null,
     *     CustomMetadata: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

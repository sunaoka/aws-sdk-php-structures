<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateCustomMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $ResourceId
 * @property string $VersionId
 * @property array<string, string> $CustomMetadata
 */
class CreateCustomMetadataRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     ResourceId: string,
     *     VersionId?: string,
     *     CustomMetadata: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

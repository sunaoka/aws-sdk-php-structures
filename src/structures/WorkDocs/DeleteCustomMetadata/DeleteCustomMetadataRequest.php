<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteCustomMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $ResourceId
 * @property string $VersionId
 * @property list<string> $Keys
 * @property bool $DeleteAll
 */
class DeleteCustomMetadataRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     ResourceId: string,
     *     VersionId?: string,
     *     Keys?: list<string>,
     *     DeleteAll?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

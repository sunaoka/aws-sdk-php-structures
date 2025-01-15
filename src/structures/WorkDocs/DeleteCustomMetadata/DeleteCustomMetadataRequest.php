<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteCustomMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $ResourceId
 * @property string|null $VersionId
 * @property list<string>|null $Keys
 * @property bool|null $DeleteAll
 */
class DeleteCustomMetadataRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     ResourceId: string,
     *     VersionId?: string|null,
     *     Keys?: list<string>|null,
     *     DeleteAll?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

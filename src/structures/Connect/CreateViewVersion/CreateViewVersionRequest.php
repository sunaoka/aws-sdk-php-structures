<?php

namespace Sunaoka\Aws\Structures\Connect\CreateViewVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ViewId
 * @property string|null $VersionDescription
 * @property string|null $ViewContentSha256
 */
class CreateViewVersionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ViewId: string,
     *     VersionDescription?: string|null,
     *     ViewContentSha256?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
